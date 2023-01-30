<?php
class controller{
    public function model($model){
        include_once './MVC/models/'.$model.'.php';
        return new $model;
    }
    public function view($view,$data=[]){
        include_once './MVC/views/'.$view.'.php';
    }
}
?>