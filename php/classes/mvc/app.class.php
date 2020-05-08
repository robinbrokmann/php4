<?php
namespace mvc;

class app
{
    private $router;

    public function __construct()
    {
        $this->router = new \mvc\Router();
    }

    public function __toString()
    {
        try {
            return $this->router->getView()->getHTML();
        }catch (\Exception $e){
            return $e.getMessage;
        }
    }

    /* oude code
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



    public function __toString(){
//return "this is app";
//}*/
}