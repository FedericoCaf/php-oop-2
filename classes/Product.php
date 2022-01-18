<?php

class Product {
  private $name;
  private $category;
  private $price;
  protected $discount = 0;

  public function __construct($_name, $_category)
  {
    $this->name = $_name;
    $this->category = $_category;
  }

  public function setName($_name){
    $this->name = $_name;
  }
  public function setCategory($_category){
    $this->category = $_category;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }


  public function getName(){
    return $this->name;
  }
  public function getCategory(){
    return $this->category;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getDiscount(){
    return $this->discount;
  }






}

