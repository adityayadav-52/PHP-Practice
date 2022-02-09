<?php

//wap in php to show setter and getter

class User{
	public $name;
	public $class;
	public $rollno;
	public $sub=[];
	
	public function create($name,$class,$rollno,$sub){
		$this->name = $name;
		$this->class = $class;
		$this->rollno = $rollno;
		$this->sub = $sub;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getClass(){
		return $this->class;
	}
	
	public function getRollno(){
		return $this->rollno;
	}
	
	public function getSub(){
		return $this->sub;
	}
	
	public function getInfo(){
	echo "User name : {$this->name} \n";
	echo "User class : {$this->class} \n";
	echo "User rollno : {$this->rollno} \n";
	echo "User subject : ".implode(',',$this->sub). "\n";
	}
}

$user = new User();
$user->create("RAM","12th",1001,["PHP","HTML","JAVA"]);
echo "User name from getter : {$user->getName()} \n";
echo "User class from getter : {$user->getClass()} \n";
echo "User Rollno from getter : {$user->getRollno()} \n";
echo "User subject from getter : ".implode(',',$user->getSub())." \n";
$user->getInfo();

?>