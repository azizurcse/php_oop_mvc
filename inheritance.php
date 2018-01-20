<?php

class Fruits{
		public $name;
	public function setName($name){
		$this->name=$name;
	}
}
class Apple extends Fruits{
	public function Juice(){
		echo "juice";
	}
}

class Mango{

}

$apple=new Apple;
$apple->setName('azizur');
echo $apple->name;