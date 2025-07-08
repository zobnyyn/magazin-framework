<?php

namespace App\controllers;

class AppController extends \Wfm\Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->getModel();
    }
}