<?php
class Apple {

	public function __construct(){
		echo "Hello!";
	}
	
	public function __destruct(){
		echo "Oh I'm died...";
	}
	
	public function old(){
		echo "I'm an old apple.";
	}
		
}

	$apple = new Apple();
	echo "<br/>";
	$apple->old();
	echo "<br/>";

?>