<?php
class Circle{
	const PI = 3.14159;
	public $radius;
	public function Area($radius){
		
		return $radius*$radius* self::PI;
		return $this->radius=$radius;
	}

	public function Cals($cal){
		return $cal*$cal * self::PI;
	}
}

$circle = new Circle;
echo  $circle->Area(5);
echo "<br/>";
echo  $circle->Cals(4);