<?php

require_once __DIR__ . "/Product.php";

class Laptop extends Product {

  private $ram = 0;
  private $screenSize = 0;
  private $hardDisk = 0;


  function __construct($_name, $_category, $_ram, $_screenSize, $_hardDisk)
  {
    parent::__construct($_name, $_category);
    $this->ram = $_ram;
    $this->screenSize = $_screenSize;
    $this->hardDisk = $_hardDisk;
  }

  public function setRam($_ram){
    $this->ram = $_ram;
  }
  public function getRam(){
    return $this->ram ;
  }
  public function setScreenSize($_screenSize){
    $this->screenSize = $_screenSize;
  }
  public function getScreenSize(){
    return $this->screenSize ;
  }
  public function setHardDisk($_hardDisk){
    $this->hardDisk = $_hardDisk;
  }
  public function getHardDisk(){
    return $this->hardDisk ;
  }

}

