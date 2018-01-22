<?php 

class Father{
	private $name = "x rahman";
	public function name(){
		return "the father name is ".$this->name;
	}

}

class Son extends Father{

	public function name(){
		return parent::name(). " son name is y rahman"; 
	}
}

$son = new Son;
echo $son->name();