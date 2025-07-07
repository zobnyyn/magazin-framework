<?php

namespace Wfm;

class App
{
    public static $app; //статик свойство для хранения экземпляра приложения

    public function __construct()
    {
        $query = trim(urldecode($_SERVER['QUERY_STRING']),'/');
        // Исправление: если в запросе есть index.php, считаем это корнем
        if (stripos($query, 'index.php') !== false) {
            $query = '';
        }
        new ErrorHandler();
        self::$app = Registry::getInstance(); //получаем экземпляр реестра
        $this->getParams(); //получаем параметры из файла params.php
        Router::dispatch($query); //вызываем метод dispatch класса Router, который будет обрабатывать запросы
    }
    protected function getParams()
    {
        $params = require_once CONFIG . '/params.php'; //файл с параметрами
        if (!empty($params)){
            foreach ($params as $k => $v){
                self::$app->setProperty($k, $v); //в контейнер по ключу нейм записывается значение,например admin_email, v - это значение (admin@gameoftheory.loc)
            }
        }
    }

}