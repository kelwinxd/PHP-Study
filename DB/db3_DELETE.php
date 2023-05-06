<?php 
$pdo = new PDO('mysql:host=localhost;dbname=danki','root','root8');

$id = 15;

#fazendo update
$sql = $pdo->prepare("DELETE FROM `client`");

if($sql->execute()){
	echo 'Success!';
}


?>