<?php
include "ShapeInterface.php";
class Triangle implements ShapeInterface{
	public function getArea(){
		echo "triangle area";
	}
}


class Rectangle implements ShapeInterface{
	public function getArea(){
		echo "Rectangle Area";
	}
}

$triangle= new Triangle;
echo $triangle->getArea(); 
echo "</br>";

$rectangle= new Rectangle;
echo $rectangle->getArea();