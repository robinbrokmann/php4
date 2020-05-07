<?php


namespace mvc;

abstract class view implements \mvc\interfaces\view {

    protected $controller;
    protected $model;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }
}