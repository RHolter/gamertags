<?php

/**
 * The Controller handles the rendering of view pages and processing of view
 * page-server interactions.
 */
class Controller
{
    private $_f3;

  /**
   * Constructor for the Controller. Instantiates the Fat-Free hive.
   * @param $f3 Fat-Free Templating object
   */
  function __construct($f3)
    {
        $this->_f3 = $f3;
    }

  /**
   * Method to load home view
   * @return void
   */
    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

  /**
   * Method to render the profile. Takes in user inputs, checks
   * validation and stores the user data.
   * @return void
   */
    function profile()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

          //First name validator and setter
          if (isset($_POST['firstname']) && Validator::validName($_POST['firstname'])) {

            $firstname = $_POST['firstname'];
          } else {

            $firstname = "";
            $this->_f3->set('errors["firstname"]', 'Enter a first name longer than 2 characters.');
          }

          $this->_f3->set('firstname', $firstname);

          // Last name
          if (isset($_POST['lastname']) && Validator::validName($_POST['lastname'])) {

            $lastname = $_POST['lastname'];
          } else {

            $lastname = "";
            $this->_f3->set('errors["lastname"]', 'Please enter a last name.');
          }

          $this->_f3->set('lastname', $lastname);

          //Username validator and setter
          if (isset($_POST['username']) && Validator::validUsername($_POST['username'])) {

            $username = $_POST['username'];
          } else {

            $username = "";
            $this->_f3->set('errors["username"]', 'Enter a username longer than 2 characters.');
          }

          $this->_f3->set('username', $username);

          //Password
          if (isset($_POST['password']) && Validator::validPassword($_POST['password'])) {

            $password = $_POST['password'];
          } else {

            $password = "";
            $this->_f3->set('errors["password"]', 'Password should be at least 5 characters and should include at least one uppercase letter, one lowercase letter, one number, and one special character.');
          }

          $this->_f3->set('password', $password);

          // Email
          if (isset($_POST['email']) && Validator::validEmail($_POST['email'])) {

            $email = $_POST['email'];
          } else {

            $this->_f3->set('errors["email"]', 'Please enter a valid email.');
          }

          $this->_f3->set('email', $email);

          // Age
          if (isset($_POST['age']) && Validator::validAge($_POST['age'])) {

            $age = $_POST['age'];
          } else {

            $this->_f3->set('errors["age"]', 'Please enter an age between 18 - 118');
          }
          $this->_f3->set('age', $age);

          $this->_f3->set('console', DataLayer::getConsoles());

          // Consoles
          if (Validator::validConsoles($_POST['console'])) {

            if (!empty($_POST['console'])) {

              // Setting session variable
              $console = $_POST['console'];

          } else if (!Validator::validConsoles($_POST['console'])) {

              // Setting to 'None'
              $console = array("None");

            }
          }

          // Setting member attribute and putting in the hive
          $this->_f3->set('console', $console);

          // Creating member object
          if (isset($_POST['vip'])) {
            // Premium member
            $member = new vip([]);
            $member->setFirstname($firstname);
            $member->setLastname($lastname);
            $member->setAge($age);
            $member->setUsername($username);
            $member->setConsole($console);
            $member->setEmail($email);
            $member->setPassword($password);
            $_SESSION['member'] = $member;
          } else {
            // Member
            $_SESSION['member'] = new member($firstname, $lastname, $username, $age,
              $email, $console, $password);
          }

          // Redirect to profile summary if there are no errors
          if (empty($this->_f3->get('errors')) && get_class($_SESSION['member']) == 'vip') {

            header('location: VIP');
          } else if (empty($this->_f3->get('errors'))) {

            header('location: summary');
          }

        }

      $view = new Template();
      echo $view->render('views/profile.html');
    }

  /**
   * Method to load vip page if vip membership checkbox is checked
   * @return void
   */
  function VIP()
  {

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Indoor interests
      if (!Validator::validGamertags($_POST['gamertags'])) {

        // Error message
        $this->_f3->set('errors["gamertags"]', 'An console was detected.');
      } else {

        if (!empty($_POST['gamertags'])) {

          // Setting session variable
          $gamertags = $_POST['gamertags'];
        } else {

          // Setting to 'None' if no indoor interests were selected
          $gamertags = array("None");
        }
        // Setting member attribute and putting in the hive
        $_SESSION['member']->setGamertags($gamertags);
        $this->_f3->set('gamertags', $gamertags);
      }

      // Redirect to profile summary if there are no errors
      if (empty($this->_f3->get('errors'))) {
        header('location: Summary');
      }
    }

    $view = new Template();
    echo $view->render('views/VIP.html');
  }

  /**
   * Method to load account summary view
   * @return void
   */
  function Summary()
  {
    $view = new Template();
    echo $view->render('views/summary.html');
  }

  /**
   * Method to upload a avatar image for vip users on the summary page
   * @return void
   */
  function Upload()
  {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 8000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
      echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION['member']->setPhoto($target_file);
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    $view = new Template();
    echo $view->render('views/summary.html');
  }
}