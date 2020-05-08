<?php
namespace mvc;



class Router{


    private $route;
    private $view;
    private $controler;
    private $model;

    public function __construct(){
        require_once(LOCAL_ROOT . "php/routes.php");
        if(isset($_GET['route'])){
            $this->route = explode("/", $_GET['route']);
        }
        $route = isset($routes[$this->getRoute()]) ? $this->getRoute() : DEFAULT_ROUTE;
        if(isset($routes[$route]['model'])) {
            $model = "\\models\\" . $routes[$route]['model'];
            $this->model = new $model();
        }
        if(isset($routes[$route]['controller'])){
            $controller = "\\controllers\\" . $routes[$route]['controller'];
            $this->controler = new $controller($this->model);
        }
        if(isset($routes[$route]['view'])){
            $view = "\\views\\" . $routes[$route]['view'];
            $this->view = new $view($this->controler, $this->model);
        }
    }



    private function getRoute(){
        return count($this->route) > 0 ? $this->route[0] : DEFAULT_ROUTE;
    }



    public function getView(){
        return $this->view;
    }



}
?>