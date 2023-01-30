<?php

class Controller{

    public function view($view , $data=[])

    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
//        var_dump(file_exists('../app/models/'.$model .'.php'));
        require_once '../app/models/'.$model .'.php';
        return new $model;
    }
}