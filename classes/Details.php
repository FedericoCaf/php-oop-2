<?php

trait Details {

 public $cpu;
 public $graphic;
 public $resolution;
 public $os;


 public function setCpu($_cpu){
  $this->cpu = $_cpu;
 }
 public function setGraphic($_graphic){
  $this->graphic = $_graphic;
 }
 public function setResolution($_resolution){
  $this->resolution = $_resolution;
 }
 public function setOs($_os){
  $this->os = $_os;
 }


 public function getCpu(){
  return $this->cpu;
}
 public function getGraphic(){
  return $this->graphic;
}
 public function getResolution(){
  return $this->resolution;
}
 public function getOs(){
  return $this->os;
}


}