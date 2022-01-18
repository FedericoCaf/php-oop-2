<?php

class CreditCard{
  public $cardholder;
  public $number;
  public $expiration;

  public function __construct($_cardholder, $_number, $_expiration)
  {
    $this->cardholder = $_cardholder;
    $this->number = $_number;
    $this->expiration = $_expiration;
  }

  }