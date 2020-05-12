<?php
define("DEFAULT_ROUTE", "home");

$routes = array(
    "home" => array(
        "view" => "HomeView",
        "controller" => "HomeController",
        "model" => "HomeModel",
    ),
    "form" =>array(
        "view" => "FormView",
    ),
    "formresult" =>array(
        "view" => "FormResultView",
        "controller" => "FormResultController",
        "model" => "FormResultModel",
    ),
    "test" =>array(
        "view" => "TestView",
        "controller" => "TestController",
        "model" => "TestModel",
    ),
    "red" => array(
        "controller" => "RedController",
    ),

    "blue" => array(
        "controller" => "BlueController",
        "view" => "BlueView",
        "model" => "BlueModel",
    )
);
?>