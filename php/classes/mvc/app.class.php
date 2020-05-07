<?php
namespace mvc;

class app
{
    private $view;

    public function __construct()
    {
        $this ->view = new \views\testview(null , null);
    }

    public function __toString()
    {
       return $this->view->getHTML();
    }

    // public function __toString(){
//return "this is app";
//}
}