<?php

include "Animal.php";
include "Tiger.php";

//instantiate 实例化
$a = new Animal();
$t = new Tiger();


$t->move();
echo "<br/>";
//$t->shout(); //will show error because set to protected
echo "<br/>";
//$t->showMuscle(); //will show error because set to private

//$a->showMuscle(); //will show error


?>