<?php

class DataLayer {

  private $_dbh;

  /**
   * This method constructs a data-layer object
   */
  function __construct()
  {

    require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');
    $dbh = 5;
    $this->_dbh = $dbh;
  }

  static function getConsoles() {

    return array("sega saturn", "playstation 2", "nintendo 64", "amiga cd32", "atari jaguar", "sega 32x", "turbografx-16", "snes");
  }
}

