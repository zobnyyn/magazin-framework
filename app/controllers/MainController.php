<?php

namespace App\Controllers;

use App\controllers\AppController;
use App\Models\Main;
use RedBeanPHP\R;
use Wfm\Controller;

class MainController extends AppController
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->model = new Main();
    }

    public function indexAction()
    {
        $slides = R::findAll('slider');

        $products = $this->model->get_hits(1,6);

        $this->set(compact('slides', 'products')); // передаём данные в представление
    }
}