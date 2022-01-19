<?php

class CreditCard{
  private $cardholder;
  private $number;
  private $expiration_month;
  private $expiration_year;

  public function __construct($_cardholder, $_number, $_expiration_month, $_expiration_year)
  {
    $this->cardholder = $_cardholder; 
    $this->number = $this->checkValidNumber($_number);
    $this->checkDateCard($_expiration_year, $_expiration_month);
    $this->expiration_month = $_expiration_month;
    $this->expiration_year = $_expiration_year;
  }

  public function setNumber($_number){
    $this->number = $this->checkValidNumber($_number);
  }
  public function setName($_cardholder){
    $this->cardholder = $_cardholder;
  }
  public function setExpirastion_month($_month){
    $this->checkDateCard($this->expiration_month, $_month);
    $this->expiration_month = $_month;
  }
  public function setExpirastion_year($_year){
    $this->checkDateCard($this->expiration_year, $_year);
    $this->expiration_year = $_year;
  }
 

  public function getNumber(){
    return $this->number;
  }
  public function getCardHolder(){
    return $this->cardholder;
  }
  public function getExpirationMonth(){
    return $this->expiration_month;
  }
  public function getExpirationYear(){
    return $this->expiration_year;
  }

  private function checkValidNumber($number){
    if(!is_numeric($number) || strlen((string)$number) != 12){
      throw new Exception('Numero carta di credito non valido');
    }
    return  $number;
  }

  private function checkDateCard($year, $month){
    if($year < substr(date("Y"), -2)){
      throw new Exception('Carta di creduto scaduta');
    }elseif($month < date("m") && $year == substr(date("Y"), -2)){
      throw new Exception('Carta di creduto scaduta');
    }
  }

  }