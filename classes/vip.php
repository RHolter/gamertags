<?php

class vip extends member {

  private $_gamertags = [];
  private $_photo = '';

  private $_uri = 'https://lzyfuentes.greenriverdev.com/328/dating/';

  public function __construct($gamertags) {
    $this->_gamertags = $gamertags;
  }

  public function setGamertags($gamertags) {

    $this->_gamertags = $gamertags;
  }

  /**
   * @return array
   */
  public function getGamertags() {

    return $this->_gamertags;
  }

  public function setPhoto($photo) {
    $this->_photo = $photo;
  }

  public function getPhoto() {
    return $this->_uri . $this->_photo;
  }

}
