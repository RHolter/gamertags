<?php

class Validator
{
  // validate name
  static function validName($name)
  {

    for ($i = 0; $i < strlen($name); $i++) {

      if (!ctype_alpha($name[$i])) {
        return FALSE;
      }
    }

    return strlen(trim($name)) >= 2;

  }

  // validate age
  static function validAge($age)
  {

    if ($age == "") {

      return false;

    } else if (!is_numeric($age)) {

      return false;

    } else if ($age >= 18 && $age <= 122) {

      return true;

    }
  }

  // validate username
  static function validUsername($username)
  {

    for ($i = 0; $i < strlen($username); $i++) {

      if (!ctype_alpha($username[$i])) {
        return FALSE;
      }
    }

    return strlen(trim($username)) >= 2;

  }

  // validate password
  static function validPassword($password)
  {

    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 5) {
      return false;

    }else{
      return true;
    }
  }

  // validate email
  static function validEmail($email)
  {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

      return true;

    } else {

      return false;

    }
  }

  // validate outdoor activities
  static function validConsoles($console)
  {

    return $console;

  }

  static function validGamertags($gamertags)
  {

    return $gamertags;

  }
}
