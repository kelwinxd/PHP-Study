<?php 

try {
    $con = new PDO('mysql:host=localhost;dbname=study','root','root8',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = $con->prepare("INSERT INTO teste(nome,idade) VALUES(:n,:i)");

$sql->bindValue(":n","Kelwin");
$sql->bindValue(":i","25");
$sql->execute();
echo "succesful";

} catch (PDOException $e) {
    echo "PDOException: " . $e->getMessage();
}







?>