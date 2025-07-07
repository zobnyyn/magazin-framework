<?php

namespace App\Controllers;

use RedBeanPHP\R;
use Wfm\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $model = new \App\Models\Main();
        $names = $model->getNames();
        $one_name = R::getRow('SELECT * FROM name WHERE id =2'); // пример запроса к базе данных
        $this->set(['names' => $names]);
        $this->setMeta('Главная страница', 'Описание главной страницы', 'Ключевые слова главной страницы');
    }
}