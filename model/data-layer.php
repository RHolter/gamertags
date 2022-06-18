<?php

class DataLayer {

  private $_dbh;

  /**
   * Constructor for DataLayer
   * @return void
   */
  function __construct()
  {
    require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');
    $this->_dbh = $dbh;
    $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->_dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }


  /**
   * Method uses PDO to insert into gamers database table
   * @return void
   */
  function profile()
  {
    // Query to insert account into database
    $sql = "INSERT INTO gamers (user_tag, first_name, last_name, email, age, console, password, gamertag) 
        VALUES (:username, :firstname, :lastname, :email, :age, :console, :password, :gamertag)";

    $statement = $this->_dbh->prepare($sql);

    $statement->bindParam(':username', $_SESSION['username'], PDO::PARAM_INT);
    $statement->bindParam(':firstname', $_SESSION['firstname'], PDO::PARAM_STR);
    $statement->bindParam(':lastname', $_SESSION['lastname'], PDO::PARAM_STR);
    $statement->bindParam(':email', $_SESSION['email'], PDO::PARAM_STR);
    $statement->bindParam(':age', $_SESSION['age'], PDO::PARAM_STR);
    $statement->bindParam(':console', $_SESSION['console'], PDO::PARAM_STR);
    $statement->bindParam(':password', $_SESSION['password'], PDO::PARAM_STR);
    $statement->bindParam(':gamertag', $_SESSION['gamertag'], PDO::PARAM_INT);

    $statement->execute();
  }

  static function getConsoles() {

    return array("Sega Saturn", "PlayStation 2", "PlayStation", "Xbox", "GameBoy", "Sega 32x", "Nintendo", "Super Nintendo");
  }
}

