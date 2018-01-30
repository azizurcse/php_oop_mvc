<?php
include "laptop.php";
include "hp.php";


class LaptopBrand extends Laptop{
use Hp;
public function price(){
	echo "i m from home";
}

	public function traitexample(){
		
	}
}

$hp = new LaptopBrand;
$hp->brand();
echo "<br>";
$hp->price();

// first priority for current class
// second priority for trait
//third priority for trait use 