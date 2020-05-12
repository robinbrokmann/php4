<?php
namespace controllers;

class BlueController extends \mvc\Controller {

    public function __construct($model){
        parent::__construct($model);
        $this->processRedirected();
    }

    public function processRedirected(){
        $redirect = $this->getGetData("redirect");
        if(isset($redirect)){
            $this->model->addData("redirect", "Je bent hier gekomen door een redirect van de Red Route.");
        } else {
            $this->model->addData("redirect", "Je bent rechtstreeks op deze route gekomen.");
        }
    }
}