<?php
class Animal {

	//Properties
	public $kind;
	public $name;
	public $speed;
	
	public function __construct($name){
		$this->name = $name;
	}
	
	//Methods
	public function speak(){
		echo $this->kind.": Hello, my name is ".$this->name;
	}
	
	public function prepare(){
		$this->speed = rand(1,100);
	}
	
}
?>