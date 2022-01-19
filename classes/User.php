<?php

require_once __DIR__ . "/CreditCard.php";

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


  // public function insertCreditCard($obj){
  //   if(strlen($obj->cardholder)>1 && strlen($obj->number)==16 && strlen($obj->expiration)==5){
  //     return 'Carta inserita correttamente';
  //   }else{
  //     return 'Carta non valida';
  //   }
  // }

}

