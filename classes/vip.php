<?php

/**
 * vip class that represents a vip user, extends member
 */
class vip extends member
{

  private $_gamertags = [];
  private $_photo = '';

  private $_uri = 'https://lzyfuentes.greenriverdev.com/328/gamertags/';

  /**
   * construct the vip portion of the member
   * @param $gamertags gamer tags for user
   */
  public function __construct($gamertags)
  {
    $this->_gamertags = $gamertags;
  }

  /**
   * Method to set the gamertags in the session
   * @param $gamertags sets gamertags as an array
   * @return void
   */
  public function setGamertags($gamertags)
  {

    $this->_gamertags = $gamertags;
  }


  /**
   * Method to return $_gamertags variable
   * @return array gamertags, null if unset
   */
  public function getGamertags()
  {

    return $this->_gamertags;
  }

  /**
   * Method to set the password in the session
   * @param $photo sets photo
   * @return void
   */
  public function setPhoto($photo)
  {
    $this->_photo = $photo;
  }

  /**
   * Method to return $_photo variable
   * @return string photo, null if unset
   */
  public function getPhoto()
  {
    return $this->_uri . $this->_photo;
  }

}
