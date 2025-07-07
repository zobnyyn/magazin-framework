<?php

namespace App\Models;

use RedBeanPHP\R;
use Wfm\Model;

class Main extends Model
{
    public function getNames(): array
    {
        // Получить все записи из таблицы name (или другой, если нужно)
        return \RedBeanPHP\R::findAll('name');
    }
}