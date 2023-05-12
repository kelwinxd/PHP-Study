<?php

define('USER','root');
define('PASS','root8');
$con = new PDO('mysql:host=localhost;dbname=study',USER,PASS,Array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$sql = $con -> query("SELECT * FROM people");
$sql -> execute();
$users = $sql -> fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $key => $value) {
    echo "<p>".$value['nome']."</p>";
}


?>