<?php


namespace mvc;


abstract class Controller implements interfaces\Controller{
    protected $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function getPostData($name){
        return $this->getData($name);
    }

    public function getGetData($name){
        return $this->getData($name, "GET");
    }

    public function getData($name, $type = "POST"){
        $dataSource = ($type == "POST" ? $_POST : $_GET);
        return isset($dataSource[$name]) ? htmlspecialchars($dataSource[$name]) : null;
    }

}
?>