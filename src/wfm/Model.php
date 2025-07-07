<?php

namespace Wfm;

abstract class Model
{
    public array $attributes = []; //массив атрибутов модели, которые будут хранить данные
    public array $errors = []; //массив ошибок валидации, которые будут храниться здесь
    public array $rules = []; //массив правил валидации, которые будут храниться здесь
    public array $labels = []; //массив меток, которые будут храниться здесь

    public function __construct()
    {
        Db::getInstance(); //инициализируем подключение к базе данных
    }
}