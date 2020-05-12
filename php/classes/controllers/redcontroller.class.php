<?php
namespace controllers;

class RedController extends \mvc\Controller {

    public function __construct($model){
        parent::__construct($model);
        header("location: blue?redirect=true");
    }
}