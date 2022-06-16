<?php

class member {

  private $_firstname;
  private $_lastname;
  private $_username;
  private $_email;
  private $_console;
  private $_age;
  private $_password;

  public function __construct($firstname, $lastname, $username, $age, $email, $console, $password) {

    $this->_firstname = $firstname;
    $this->_lastname = $lastname;
    $this->_username = $username;
    $this->_age = $age;
    $this->_email = $email;
    $this->_console = $console;
    $this->_password = $password;
  }

  /**
   * @return string
   */
  public function getFirstname() {

    return $this->_firstname;
  }

  /**
   * @param string $fname
   */
  public function setFirstname($firstname) {

    $this->_firstname = $firstname;
  }

  /**
   * @return string
   */
  public function getLastname() {

    return $this->_lastname;
  }

  /**
   * @param string $lname
   */
  public function setLastname($lastname) {

    $this->_lastname = $lastname;
  }

  /**
   * @return int
   */
  public function getAge() {

    return $this->_age;
  }

  /**
   * @param int $age
   */
  public function setAge($age) {

    $this->_age = $age;
  }

  /**
   * @return string
   */
  public function getUsername() {

    return $this->_username;
  }

  /**
   * @param string $gender
   */
  public function setUsername($username) {

    $this->_username = $username;
  }

  /**
   * @return mixed
   */
  public function getEmail() {

    return $this->_email;
  }

  /**
   * @param mixed $email
   */
  public function setEmail($email) {

    $this->_email = $email;
  }

  /**
   * @return mixed
   */
  public function getConsole() {

    return $this->_console;
  }

  /**
   * @param mixed $state
   */
  public function setConsole($console) {

    $this->_console = $console;
  }

  public function getPassword() {

    return $this->_password;
  }

  /**
   * @param mixed $state
   */
  public function setPassword($password) {

    $this->_password = $password;
  }
}
