<?php
class Book{
	static public $price;
	// private $newprice=35;

	static public function bookPrice(){
		return "hello static function";
	}
}

echo Book::bookPrice();