<?php 

class Father{
	private $name = "x rahman";
	public function name(){
		return "the father name is ".$this->name;
	}

}

class Son extends Father{

}

$son = new Son;
echo $son->name();