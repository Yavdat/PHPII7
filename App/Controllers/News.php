<?php


namespace App\Controllers;


use App\Exceptions\Core;
use App\Exceptions\Db;
use App\MultiException;
use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view=new View();
    }

    public function action($action)
    {
        $methodName='action'.$action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
//        $ex=new Db('Сообщение об исключении');
//        throw $ex;
       // echo 'Счетчик';
    }

    protected function actionOne()
    {
        $id=(int)$_GET['id'];
        $this->view->article=\App\Models\News::findById($id);
        $this->view->display(__DIR__.'/../templates/one.php');
    }
    
    protected function actionIndex()
    {
        $this->view->title='My cool site';
        $this->view->news=\App\Models\News::findAll();
        $this->view->display(__DIR__.'/../templates/index.php');
    }
    
    protected function actionCreate()
    {
        try{
            $article=new \App\Models\News();//Новая новость
            $article->fill([]);//Заполнить данными
            $article->save();//Сохранить
        }catch (MultiException $e){
            $this->view->errors=$e;
        }
        $this->view->display(__DIR__.'/../templates/create.php');
    }
}