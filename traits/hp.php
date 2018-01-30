<?php
include "lenovo.php";
trait Hp{

	use Lenovo;

	public function price(){
		echo "hp price $345";
	}

	abstract function traitexample();
}