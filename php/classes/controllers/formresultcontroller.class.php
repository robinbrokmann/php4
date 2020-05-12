<?php
namespace controllers;

class FormResultController extends \mvc\Controller {

    public function __construct($model){
        parent::__construct($model);
        $this->processFormOutput();
    }

    public function processFormOutput(){
        //De htmlspecialchars functie wordt in de abstract controller class aangeroepen.
        $voornaam = $this->getPostData("voornaam");
        $achternaam = $this->getPostData("achernaam");
        $woonplaats = $this->getPostData("woonplaats");
        if(isset($voornaam)){
            $this->model->addData("voornaam", $voornaam);
        }
        if(isset($achternaam)){
            $this->model->addData("achternaam", $achternaam);
        }
        if(isset($woonplaats)){
            $this->model->addData("woonplaats", $woonplaats);
        }
    }



}