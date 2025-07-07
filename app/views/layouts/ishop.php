<?php

use Wfm\View;

/** $var $this View */

?>

<?= $this->getPart('parts/header'); // Получаем шапку сайта ?>
<?= $this->content ?> // Контент страницы, который будет вставлен в шаблон
<?php $this->getDbLogs(); // Получаем логи базы данных, если DEBUG включен ?>
<?= $this->getPart('parts/footer'); // Получаем подвал сайта ?>
