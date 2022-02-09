<?php



class Test{
	public function __construct($name,$rollno){
		echo $name.PHP_EOL;
		echo $rollno;
	}
}
$test = new Test('Aditya',286);

?>