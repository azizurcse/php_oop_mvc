<?php
class User{
	public $name = 'Azizur rahman';
	private $password ='12345';
	protected $email ='jibon@gmail.com';

	public function getPass(){
		return $this->password;
	}
}

/**
* 
*/
class AccessProtected extends User
{
	
	function __construct()
	{
		
	}
	public function seeEmail(){
		return $this->email;
	}
}

$seeemail= new AccessProtected;
echo $seeemail->seeEmail();
$user = new User;
echo "<br>";
echo $user->getPass();