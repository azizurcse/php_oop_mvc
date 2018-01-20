<?php
include "ShapeInterface.php";
include "geomertyInterface.php";
class Triangle implements ShapeInterface,geometryInterface{
	public function getArea(){
		echo "triangle area";
	}

	public function getCircumference($length,$width){
		echo "multiple interface example";
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