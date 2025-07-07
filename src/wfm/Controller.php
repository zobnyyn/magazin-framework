<?php

namespace Wfm;

abstract class Controller // абстрактный базовый класс контроллера, который будет наследоваться другими контроллерами
{
    public array $data = []; // массив для передачи данных в представление
    public array $meta = []; // массив для мета тегов, которые будут передаваться в представление
    public false|string $layout = ''; // имя шаблона, который будет использоваться для отображения представления
    public string $view = '';
    public object $model; // модель, которая будет использоваться в контроллере


    public function __construct(public $route = []) // маршрут, который будет передаваться в контроллеры
    {

    }

    public function getModel()
    {
        $model = 'app\\models\\' . ucfirst($this->route['admin_prefix']) . $this->route['controller'];
        if (class_exists($model)) {
            $this->model = new $model();
        } // если модели нет, просто ничего не делаем
    }

    public function getView()// метод для получения представления
    {
        $this->view = $this->view ?: $this->route['action']; // если представление не задано, то используем действие из маршрута
        (new View($this->route, $this->layout, $this->view, $this->meta))->render($this->data); // создаём объект представления, передавая в него маршрут, шаблон, представление и мета теги
    }

    public function set($data) // метод для установки данных, которые будут переданы в представление
    {
        $this->data = $data; // устанавливаем данные, которые будут переданы в представление
    }

    public function setMeta($title = '', $description = '', $keywords = '') // метод для установки мета тегов, которые будут переданы в представление
    {
        $this->meta = [
            'title' => $title, // устанавливаем заголовок страницы
            'description' => $description, // устанавливаем описание страницы
            'keywords' => $keywords // устанавливаем ключевые слова страницы
        ];
    }
}