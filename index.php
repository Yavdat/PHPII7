<?php

//var_dump($_SERVER['REQUEST_URI']); die;

require __DIR__.'/autoload.php';

$url=$_SERVER['REQUEST_URI'];

$controller=new \App\Controllers\News();

$action=$_GET['action']?:'Index';

try{
    $controller->action($action);
} catch (\App\Exceptions\Core $ex){
    echo 'Возникло исключение приложения:'.$ex->getMessage();
} catch (\App\Exceptions\Db $ex){
    echo 'Что-то не так с базой';
}
