<?php 
define('USER','root');
define('PASS','root8');
$con = new PDO('mysql:host=localhost;dbname=study',USER,PASS,Array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
#Lock tables trava a tabela por um tempo para não colidir com outros processos.
$con -> exec("LOCK TABLES people WRITE");
sleep(5);

echo "ready to use";




?>