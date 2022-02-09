<?php

// wap in php to show class and object in php

class Tv{
	var $model = 'XL TV'; // default or public modifier
	var $type = 'LED';
	var $price = 50000;
	var $color = 'Black';
	var $varient = 'Curved';

	public function showInfo(){
		echo "The model for ".__CLASS__." {$this->model} \n";
		echo "The type for ".__CLASS__." {$this->type} \n";
		echo "The price for ".__CLASS__." {$this->price} \n";
		echo "The color for ".__CLASS__." {$this->color} \n";
		echo "The varient for ".__CLASS__." {$this->varient} \n";
	}
	public function volume(){
		echo "volume up";
	}
}
$tv = new Tv();  // object
$tv->showInfo(); // function calling or method calling

echo "Tv volume will be :";
echo "{$tv->volume()";

?>