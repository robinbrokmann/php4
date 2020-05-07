<?php
namespace mvc;

class app
{
    private $view;
    private $controller;

 public function __construct() {
    $this->controller = new \controllers\testcontroller(null);
    $this->view = new \views\testview($this->controller, null);
}

    public function __toString()
    {
       return $this->view->getHTML();
    }

    /* oude code

    public function __toString(){
//return "this is app";
//}*/
}