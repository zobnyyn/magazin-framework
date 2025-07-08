<?php

namespace Wfm;

class Router
{
    protected static array $routes = []; // массив для хранения всех маршрутов
    protected static array $route = []; // массив для хранения текущего маршрута

    public static function add($regexp, $route = []) // метод для добавления маршрута
    {
        self::$routes[$regexp] = $route;
    }
    public static function getRoutes(): array // метод для получения всех маршрутов
    {
        return self::$routes;
    }
    public static function getRoute(): array // метод для получения текущего маршрута
    {
        return self::$route;
    }
    protected static function removeQueryString($url) // метод для удаления строки запроса из URL
    {
        if ($url) {
            $params = explode('&',$url, 2); // разбиваем строку запроса на массив по символу '&', ограничиваем количество элементов в массиве до 2, чтобы не было лишних параметров
            if(false===str_contains($params[0], '=')) { // если в строке запроса нет знака '=', то это значит, что это просто путь без параметров
                return rtrim($params[0], '/'); // если в строке запроса нет знака '=', то возвращаем первый элемент массива, убирая слэши в конце
            }
        }
    return ''; // если строка запроса пустая, то возвращаем пустую строку
    }
    public static function dispatch($url) // метод для обработки URL и вызова соответствующего контроллера и действия
    {
        $url = self::removeQueryString($url); // удаляем строку запроса из URL, если она есть
        if(self::matchRoute($url)) // проверяем, совпадает ли URL с каким-либо маршрутом
        {
            $controller = 'App\\Controllers\\' . self::$route['admin_prefix'] . self::$route['controller'] . 'Controller'; // формируем имя контроллера, используя пространство имён и имя контроллера из маршрута
            if (class_exists($controller)) {

                /** @var Controller $controllerObject */ // создаём объект контроллера, используя пространство имён и имя контроллера из маршрута
                $controllerObject = new $controller(self::$route); // создаём объект контроллера, передавая в него текущий маршрут

                $controllerObject->getModel(); // вызываем метод getModel() для получения модели, которая будет использоваться в контроллере


                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if (method_exists($controllerObject, $action)) {   // действие найдено, можно вызвать $controllerObject->$action();
                    $controllerObject->$action(); // вызываем метод контроллера
                    $controllerObject->getView(); // вызываем метод getView() для получения представления, которое будет использоваться в контроллере
                } else {
                    throw new \Exception("Метод не найден: {$action} в контроллере {$controller}", 404); // если метод не найден, то выбрасываем исключение
                }
            } else {
                throw new \Exception("Контроллер не найден: {$controller}", 404); // если контроллер не найден, то выбрасываем исключение
            }
        } else {
            throw new \Exception("Страница не найдена: {$url}", 404); // если маршрут не найден, то выбрасываем исключение
        }
    }
    public static function matchRoute($url): bool
    {
        foreach (self::$routes as $pattern => $route)
        {
            if(preg_match("#{$pattern}#i", $url, $matches)) // проверяем совпадение с регулярным выражением
            {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v; // если ключ строка, то добавляем в маршрут
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index'; // если действие не указано, то по умолчанию 'index'
                }
                if (!isset($route['controller'])) {
                    $route['controller'] = 'Main'; // если контроллер не указан, то по умолчанию 'Main'
                }
                if (!isset($route['admin_prefix'])) {
                    $route['admin_prefix'] = ''; // если префикс админки не указан, то по умолчанию пустая строка
                } else {
                    $route['admin_prefix'] .= '\\'; // если префикс админки указан, то добавляем слеш для пространства имён
                }
                $route['controller'] = self::upperCamelCase($route['controller']); // преобразуем имя контроллера в UpperCamelCase
                self::$route = $route; // сохраняем текущий маршрут
                return true; // возвращаем true, если маршрут найден
            }
        }
        return false; // возвращаем false, если маршрут не найден

    }

    protected static function upperCamelCase(string $name): string // метод для преобразования имени в UpperCamelCase // UpperCamelCase - это стиль написания, где каждое слово начинается с заглавной буквы и нет пробелов или дефисов
    {
        //new-product => new product
        str_replace('-', '', $name); // убираем дефисы из имени
        //new product => New Product
        $name = ucwords($name); // делаем каждое слово с большой буквы
        //New Product => NewProduct
        $name = str_replace(' ', '', $name); // убираем пробелы из имени
        return $name;
    }
    protected static function lowerCamelCase(string $name): string // метод для преобразования имени в lowerCamelCase // lowerCamelCase - это стиль написания, где первое слово начинается с маленькой буквы, а каждое последующее слово начинается с заглавной буквы
    {
        //new-product => new product
        $name = self::upperCamelCase($name); // преобразуем в UpperCamelCase
        //NewProduct => newProduct
        $name[0] = strtolower($name[0]); // делаем первую букву маленькой
        return $name;
    }


}