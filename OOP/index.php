<?php 

include('Class.php');

#Intanciar objetos publicos
$people1 = new People();
$people1->var2 = 'Kelwin';
echo $people1->var2;
$people1->walk();

#Instaciar objetos staticos

echo People::$var3;

#setando variaveis
$people2 = new People();
echo $people2->setVar('setVar funcionando')











?>