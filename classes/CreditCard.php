<?php

class CreditCard{
  private $cardholder;
  private $number;
  private $expiration;

  public function __construct($_cardholder, $_number, $_expiration)
  {
    $this->cardholder = $_cardholder;
    $this->number = $_number;
    $this->expiration = $_expiration;
  }

  }