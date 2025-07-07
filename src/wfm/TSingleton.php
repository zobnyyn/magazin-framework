<?php
//трейты чтоб не копипастить код в каждом классе
namespace Wfm;

trait TSingleton
{

private static ?self $instance=null;

private function __construct(){}

public static function getInstance(): static
{
    return self::$instance ??= new static(); //если у нас есть что то в статик инстанс, то возвращаем это, иначе создаём новый объект
}

}