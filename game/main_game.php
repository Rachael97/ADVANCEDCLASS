<?php
include "Animal.php";
include "Rabbit.php";
include "Tortoise.php";
include "Game.php";

	$bob = new Tortoise("bob");
	$roger = new Rabbit("roger");
	
	$game = new Game();
	
	$game->join($bob);
	$game->join($roger);
	
	$game->gameStart();
	

?>