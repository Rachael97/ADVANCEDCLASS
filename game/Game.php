<?php
class Game{
	
	public $queue = array();
	
	public function join(Animal $animalObj){
		$this->queue[] = $animalObj;
	}
	
	public function gameStart(){
		
		foreach($this->queue as $v){
			$v->speak();
			echo "<br/>";
			$v->prepare();
			echo "<br/>";
		}
		
		if($this->queue[0]->speed > $this->queue[1]->speed){
			echo $this->queue[0]->name." is a winner!";
		} else if($this->queue[0]->speed < $this->queue[1]->speed){
			echo $this->queue[1]->name." is a winner!";
		} else {
			echo "Draw";
		}
		
		echo "<br/>";
		echo "Result: ".$this->queue[0]->name." ".$this->queue[0]->speed.", ".$this->queue[1]->name." ".$this->queue[1]->speed;
		
	}
	
}
?>