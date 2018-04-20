<?php
class Tiger extends Animal {

	//inheritance from animal.php
	private function showMuscle(){
		echo "(ting......)";
	}
	
	//override
	public function move(){
		$this->shout(); //protected can use in own class or derived class
		echo "<br/>";
		$this->showMuscle(); //private can only use in own class
		echo "<br/>";
		echo "tiger is moving....."; //public can only use in everywhere
	}
	
}
?>