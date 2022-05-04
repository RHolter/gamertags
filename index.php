<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once("vendor/autoload.php");

//create an instance of the base class
// :: invokes a static method

$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    //echo "<h1>Pets Home</h1>;


    $view = new Template();
    echo $view-> render('views/home.html');
}
);

//run fat free
$f3->run();
