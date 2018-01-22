<?php
class Author{
	public $name='jibon';

	public function author(){
		return "the author name is: ".$this->name;
	}
}

class newBook extends Author{
	public function author(){
		return "extends author class name ".$this->name. "and rahman";
	}
}

$book =new newBook;
echo $book->author();