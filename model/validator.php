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

      if (!ctype_alpha($username[$i]) || !ctype_digit($username[$i])) {
        return FALSE;
      }
    }

    return strlen(trim($username)) >= 2;

  }

  // validate password
  static function validPassword($password)
  {

    for ($i = 0; $i < strlen($password); $i++) {

      if (!ctype_alpha($password[$i]) || !ctype_digit($password[$i])) {
        return FALSE;
      }
    }

    return strlen(trim($password)) >= 4;

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

    return count(array_intersect(Datalayer::getConsoles(), $console)) > 0;

  }
}
