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

    return array("Sega Saturn", "PlayStation 2", "PlayStation", "Xbox", "GameBoy", "Sega 32x", "Nintendo", "Super Nintendo");
  }
}

