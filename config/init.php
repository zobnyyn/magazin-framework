<?php
//0 - режим продакшен, 1 - режим разработки
//define потому что константы имеют ряд ограничений :)
define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/src/wfm');
define("HELPERS", ROOT . '/src/wfm/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LOGS", ROOT . '/tmp/logs');
define("LAYOUT", 'ishop');
define("PATH", 'http://localhost:8080');
define("ADMIN", 'http://localhost:8080/admin');
define("NO_IMAGE", 'uploads/no-image.jpg');

// подключаем composer autoload
require_once ROOT . '/vendor/autoload.php';