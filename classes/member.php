<?php

/**
 * member class that represents users
 */
class member
{

  private $_firstname;
  private $_lastname;
  private $_username;
  private $_email;
  private $_console;
  private $_age;
  private $_password;

  /**
   * takes in parameters to create the member object
   * @param $firstname first name of user
   * @param $lastname last name of user
   * @param $username username for user
   * @param $age age of user
   * @param $email email of user
   * @param $console list of consoles user has
   * @param $password password for user
   */
  public function __construct($firstname, $lastname, $username, $age, $email, $console, $password)
  {

    $this->_firstname = $firstname;
    $this->_lastname = $lastname;
    $this->_username = $username;
    $this->_age = $age;
    $this->_email = $email;
    $this->_console = $console;
    $this->_password = $password;
  }

  /**
   * Method to return $_firstname variable
   * @return mixed first name, null if unset
   */
  public function getFirstname()
  {

    return $this->_firstname;
  }

  /**
   * Method to set the firstname in the session
   * @param string sets firstname
   */
  public function setFirstname($firstname)
  {

    $this->_firstname = $firstname;
  }

  /**
   * Method to return $_lastname variable
   * @return mixed last name, null if unset
   */
  public function getLastname()
  {

    return $this->_lastname;
  }

  /**
   * Method to set the lastname in the session
   * @param string $lastname sets firstname
   */
  public function setLastname($lastname)
  {

    $this->_lastname = $lastname;
  }

  /**
   * Method to return $_age variable
   * @return int age, null if unset
   */
  public function getAge()
  {

    return $this->_age;
  }

  /**
   * Method to set the age in the session
   * @param int $age sets age
   */
  public function setAge($age)
  {

    $this->_age = $age;
  }

  /**
   * Method to return $_username variable
   * @return string username, null if unset
   */
  public function getUsername()
  {

    return $this->_username;
  }

  /**
   * Method to set the username in the session
   * @param string $username sets username
   */
  public function setUsername($username)
  {

    $this->_username = $username;
  }

  /**
   * Method to return $_email variable
   * @return mixed email, null if unset
   */
  public function getEmail()
  {

    return $this->_email;
  }

  /**
   * Method to set the email in the session
   * @param mixed $email sets email
   */
  public function setEmail($email)
  {

    $this->_email = $email;
  }

  /**
   * Method to return $_console variable
   * @return mixed console, null if unset
   */
  public function getConsole()
  {

    return $this->_console;
  }

  /**
   * Method to set the console in the session
   * @param mixed $console sets console
   */
  public function setConsole($console)
  {

    $this->_console = $console;
  }

  /**
   * Method to return $_password variable
   * @return mixed password, null if unset
   */
  public function getPassword()
  {

    return $this->_password;
  }

  /**
   * Method to set the password in the session
   * @param mixed $password sets password
   */
  public function setPassword($password)
  {

    $this->_password = $password;
  }
}
