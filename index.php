<?php 
// class is user is just created and User have a methos or function is Login.
class User{
	public $id;
	public $username;
	public $password;
	public $email;

	// __construct() is a megic method and when initilize data to first executed without the call method of the class.
	//  same as a __distruct magic method. is call in the last  
	public function __construct(){
		//$this is a point to the current variable.
		$this->username = $username;
		$this->username = $password;
	}

	// public is a method access identifier.
	public function register(){
		echo " User registered";
	}

	// login method has a two parameters $username and $password.

/*	public function login($username, $password){
		echo $username." is Logged in "; 

	}
*/

	// login method has a nested method how to call the method into method expmple is here.
	public function login($username, $password){
		$this->auth_user($username, $password);

	}

	public function auth_user($username, $password){
		echo $username." is logged in "; 
	}

	//  same as a __distruct magic method. is call in the last  
	public function __destruct(){
		echo "distruct called.";
	}

}

$User = new User;

// $User->register();
$User->login("kuldip","kul");