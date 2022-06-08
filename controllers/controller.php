<?php
/*
328/gamertags/controllers/controller.php
*/

class Controller
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function profile() {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Move  profle data from POST to SESSION
           // var_dump ($_POST);

            //Get the user data from the post array
            $food = $_POST['food'];
            $this->_f3->set('userFood', $food);

            //Option 1
            $meal = "";
            if (isset($_POST['meal'])) {
                $meal = $_POST['meal'];
            };
    }






} // end of Controller class