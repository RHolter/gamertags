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
    //echo "<h1>G@mer T@gs Home</h1>;
    $view = new Template();
    echo $view-> render('views/home.html');
}
);

//Route for profile page
$f3->route('GET /profile', function (){
    //echo "<h1>User Profile Page</h1>"
    $view = new Template();
    echo $view-> render('views/profile.html');
});

$f3->route('GET /console', function (){
  $view = new Template();
  echo $view-> render('views/console.html');
});

//Profile summary route
$f3->route('GET|POST /summary', function (){

    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['console'] = $_POST['consoles'];

    $view = new Template();
    echo $view->render('views/summary.html');

});

// sega saturn games
$f3->route('GET /segasaturn', function (){
    $view = new Template();
    echo $view-> render('views/segasaturn.html');
});


//run fat free
$f3->run();



