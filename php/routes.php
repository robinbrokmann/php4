<?php
define("DEFAULT_ROUTE", "home");

$routes = array(
    "home" => array(
        "view" => "homeview",
        "controller" => "homecontroller",
    ),
    "form" => array(
        "view" => "formview",
        "controller" => "formcontroller",
    ),
    "test" => array(
        "view" => "testview",
        "controller" => "testcontroller",
    ),
);
