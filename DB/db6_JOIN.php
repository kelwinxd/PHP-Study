<?php 
$con = new PDO('mysql:host=localhost;dbname=study','root','root8');
$sql= $con->prepare("SELECT * FROM `emp` INNER JOIN `cargo` ON `emp`.`id_cargo` = `cargo`.`id_cargo`");

#LEFT JOIN - Mostre os da esquerda mesmo que falte o da direita;
#INNER JOIN - Só mostre os que tem correspondencias

$sql->execute();

$client = $sql->fetchAll();

foreach ($client as $key => $value) {
    echo "<h3>".$value['nome']." || ".$value['nome_cargo'];
}


?>