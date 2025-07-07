<?php

namespace Wfm;

class View
{
    public string $content = ''; // содержимое страницы

    public function __construct( // параметры для создания представления
        public $route, // маршрут, который содержит контроллер, действие и параметры
        public $layout = '', // имя шаблона, который будет использоваться для отображения представления
        public $view = '', // имя представления, которое будет отображаться
        public $meta = [], // мета теги, которые будут переданы в представление
    )
    {
        if (false !== $this->layout) { // если шаблон не равен false, то устанавливаем его
            $this->layout = $this->layout ?: LAYOUT; // если шаблон не задан, то используем константу LAYOUT
        }
    }

    public function render($data)
    {
        if (is_array($data)) { // если данные переданы в виде массива
            extract($data); // извлекаем данные из массива, чтобы они стали доступными в представлении
        }
        // admin\ => admin/
        $prefix = str_replace('\\','/', $this->route['admin_prefix']); // заменяем обратные слэши на прямые в префиксе маршрута

        $view_file = APP . "/views/{$prefix}{$this->route['controller']}/{$this->view}.php"; //формируем путь к файлу представления
        if (is_file($view_file)) { // если файл представления существует
            ob_start(); // начинаем буферизацию вывода
            require $view_file; // подключаем файл представления
            $this->content = ob_get_clean(); // получаем содержимое буфера и очищаем его
        } else {
            throw new \Exception("Не найдено представление: {$view_file}", 404); // если файл не найден, то выбрасываем исключение
        }
        // Подключаем layout, если он не равен false
        if (false !== $this->layout) { // если шаблон не равен false, то подключаем его
            $layout_file = APP . "/views/layouts/{$this->layout}.php"; // формируем путь к файлу шаблона
            if (is_file($layout_file)) { // если файл шаблона существует
                require $layout_file; // подключаем файл шаблона
            } else {
                throw new \Exception("Не найден шаблон: {$layout_file}", 500); // если файл шаблона не найден, то выбрасываем исключение
            }
        }
    }
    public function getMeta() // метод для получения мета тегов, которые будут вставлены в head страницы
    {
        $out = '<title>' . htmlspecialchars($this->meta['title'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</title>' . PHP_EOL;
        $out .= '<meta name="description" content="' . htmlspecialchars($this->meta['description'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '">' . PHP_EOL;
        $out .= '<meta name="keywords" content="' . htmlspecialchars($this->meta['keywords'] ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '">' . PHP_EOL;
        return $out;
    }
    public function getDbLogs() // метод для получения логов базы данных, если DEBUG включен
    {
        if(DEBUG) {
            $logs = \RedBeanPHP\R::getDatabaseAdapter()->getDatabase()->getLogger(); // получаем логгер базы данных
            $logs = array_merge($logs->grep('SELECT'), $logs->grep('select'), $logs->grep('INSERT'), $logs->grep('insert'), $logs->grep('UPDATE'), $logs->grep('update'), $logs->grep('DELETE'), $logs->grep('delete')); // фильтруем логи по типам запросов
            debug($logs);
        }
    }
    public function getPart($file, $data = []) // метод для получения части представления чтоб красиво подключать части визуалки
    {
        if (is_array($data)) {
            extract($data); // извлекаем данные из массива, чтобы они стали доступными в представлении
        }
        $file = APP . "/views/{$file}.php"; // формируем путь к файлу части
        if (is_file($file)) { // если файл части существует
            ob_start(); // начинаем буферизацию вывода
            require $file; // подключаем файл части
            return ob_get_clean(); // получаем содержимое буфера и очищаем его
        } else {
            throw new \Exception("Не найден файл части: {$file}", 404); // если файл не найден, то выбрасываем исключение
        }
    }
}