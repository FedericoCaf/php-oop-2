<?php

class User {
  private $nickname;
  private $email;

  public function __construct($_nickname, $_email)
  {
    $this->nickname = $_nickname;
    $this->email = $_email;
  }

  public function setNickname($_nickname){
    $this->nickname = $_nickname;
  }
  public function setEmail($_email){
    $this->email = $_email;
  }

  public function getNickname(){
    return $this->nickname;
  }
  public function getEmail(){
    return $this->email;
  }

}

