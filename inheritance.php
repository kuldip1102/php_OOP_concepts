<?php 
error_reporting(E_ALL);
// variable private is access only in the class 
// public access in every place.
// protected in inside the class and only inside the extended class.
class First{
	public $id = 23;
	public $name = "kuldip suthar";

	// protected $ = "protected";

	public function saySomething($word){
		echo $word;
	
	}
}

class Second extends First{

	public function getName(){
		 echo $this->$name;
	}

}

$Second = new Second;

// echo $Second->getName();
echo $Second->saySomething('hello world');