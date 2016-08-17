<?php

namespace App;


trait Singleton
{
    protected static $instance;
    
    protected function __construct() //Запретили прямое создание объекта
    {
    }
    public static function instance() //Создали статический метод который возвращает нам объект, но в нем вводим контроль на тему того был ли раньше объект создан
    {
        if (null===static::$instance){
            static::$instance=new static;
        }
        return static::$instance;
    }
}