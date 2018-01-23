<?php 

class Authors{
	public static $name='jibon';

	public static function author(){
		return "the author name is: ".self::$name;
	}

	public static function getAuthor(){
		echo static::author();
	}
}

class newBook extends Authors{
	public static function author(){
		return "extends author class name ".self::$name. " and rahman";
	}
}

Authors::getAuthor();
echo "</br>";
newBook::getAuthor();