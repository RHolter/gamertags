<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once("vendor/autoload.php");

//Start session
session_start();

//create an instance of the base class
$f3 = Base::instance();

//Create an instance of the controller class
$con = new Controller($f3);

//Define a default route
$f3->route('GET /', function() {

  $GLOBALS['con']->home();
}
);

//Route for profile page
$f3->route('GET|POST /profile', function () use ($f3) {
  $GLOBALS['con']->profile();
});

$f3->route('GET|POST /VIP', function () use ($f3) {
  $GLOBALS['con']->VIP();
});

//Profile summary route
$f3->route('GET|POST /summary', function () use ($f3) {
  $GLOBALS['con']->Summary();
});

$f3->route('GET|POST /upload', function () {
  $GLOBALS['con']->Upload();
});

// sega saturn games
$f3->route('GET /segasaturn', function (){
    $view = new Template();
    echo $view-> render('views/segasaturn.html');
});
// playstation games
$f3->route('GET /playstation', function (){
    $view = new Template();
    echo $view-> render('views/playstation.html');
});

//xbox games
$f3->route('GET /xbox', function (){
    $view = new Template();
    echo $view-> render('views/xbox.html');
});

//snes games
$f3->route('GET /snes', function (){
    $view = new Template();
    echo $view-> render('views/snes.html');
});
//nintendo games
$f3->route('GET /handheld', function (){
    $view = new Template();
    echo $view-> render('views/handheld.html');
});

//run fat free
$f3->run();


