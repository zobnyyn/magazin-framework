<?php

namespace Wfm;

use RedBeanPHP\R;
class Db
{

    use TSingleton;

    private function __construct()
    {
        require_once dirname(__DIR__, 2) . '/vendor/gabordemooij/redbean/RedBeanPHP/R.php'; // Явное подключение RedBeanPHP
        $db = require CONFIG . '/config.db.php'; //подключаем файл с параметрами базы данных
        if (!$db || !is_array($db)) {
            throw new \Exception('Ошибка подключения к базе данных: неверный файл конфигурации', 500);
        }
        \RedBeanPHP\R::setup($db['dsn'], $db['user'], $db['password']); //настраиваем RedBeanPHP
        if (!\RedBeanPHP\R::testConnection()) {
            throw new \Exception('No connection to the database', 500);
        }
        \RedBeanPHP\R::freeze(true); //замораживаем структуру базы данных, чтобы не было изменений
        if(DEBUG){
            \RedBeanPHP\R::debug(true, 3); //включаем отладку запросов к базе данных
        }
    }

}