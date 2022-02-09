<?php

 class Tv{
	 public $color = "Black";
	 public $size = '56 inch';
	 public $price = 25000;
	 public $type = "LED";
	 public $company = "SONI";
	 
	 
	 public function info(){
		 echo "The color : {$this->color} \n";
		 echo "The size : {$this->size} \n";
		 echo "The price : {$this->price} \n";
		 echo "The type : {$this->type} \n";
		 echo "The company : {$this->company} \n";
	 }
	 
	 public function on(){
		 echo "Tv on \n";
	 }
	 
	 
	 public function off(){
		 echo "Tv off \n";
	 }
	 
	 
	 public function volup(){
		 echo "volume ++ \n";
	 }
	 
	 public function voldown(){
		 echo "volume -- \n";
	 }

 }

(new Tv)->info();   // Anonymous object
(new Tv)->volup();   // Anonymous object
(new Tv)->voldown();   // Anonymous object

$remote1 = new Tv;      // reference object
$remote1-> info();      // reference object
$remote1-> volup();      // reference object
$remote1-> voldown();      // reference object


$remote2 = new Tv;      // reference object
$remote2-> info();      // reference object
$remote2-> volup();      // reference object
$remote2-> voldown();      // reference object

?>