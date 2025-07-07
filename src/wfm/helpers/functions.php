<?php

function debug($data, $die = false): void //Дебаг функция для вывода данных, void - не возвращает ничего, $die - если true, то останавливает выполнение скрипта
{
    echo '<pre>' . print_r($data, true) . '</pre>';
    if ($die) {
        die;
    }
}

function h($str): string //Функция для экранирования строк, чтобы избежать XSS атак
{
    return htmlspecialchars($str ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
