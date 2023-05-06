<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=danki','root','root8');


if(isset($_POST['action'])){

    $name = $_POST['name'];
    $last = $_POST['last'];
    $data = date('Y-m-d H-i-s');
    
    $sql = $pdo->prepare("INSERT INTO `client` VALUES (null,?,?,?)");
    $sql->execute(array($name,$last,$data));
    
    


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis recusandae, molestias non similique voluptatum quas facilis minima corporis in, expedita vero delectus dignissimos doloribus praesentium sequi atque exercitationem obcaecati veritatis.

    <input type="text" name="name" id="">
    <input type="text" name="last" id="">
    <input type="submit" name="action" value="Enviar">
    </form>
</body>
</html>