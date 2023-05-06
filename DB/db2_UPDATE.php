<?php 
$pdo = new PDO('mysql:host=localhost;dbname=danki','root','root8');

$id = 15;

#fazendo update
$sql = $pdo->prepare("UPDATE `client` SET nome='Goku',sobrenome='Son' WHERE id=$id");

if($sql->execute()){
	echo 'Success!';
}


?>