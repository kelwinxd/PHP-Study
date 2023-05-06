<?php 

$pdo = new PDO('mysql:host=localhost;dbname=study','root','root8');
$sql = $pdo-> prepare("SELECT * FROM `emp` GROUP BY cargo ORDER BY nome ASC LIMIT 1,3");
$sql->execute();
$employer = $sql->fetchAll();

foreach ($employer as $key => $value) {
    echo "<h3>".$value['nome']."</h3>";
    echo "<hr>";
     
}








?>