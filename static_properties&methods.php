<?php 

class User{
	public $username ;
	public static $minPasslength = 5;

	public static function validatePassword($password){
		if (strlen($password) >= self::$minPasslength) {
			return true;
		}else{
			return false;
		}
	}
}

$password = "kulfs";

if (User::validatePassword($password)) {
	echo "password is valid";
}else{
	echo "password is not valid";
}