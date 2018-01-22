<?php
class Book{
	static public $price=30;
	// private $newprice=35;

	public function bookPrice(){
		return $this-$newprice;
	}
}

echo Book::$price;