<?php

$pdo = new PDO('mysql:host=localhost;dbname=danki','root','root8');


if(isset($_POST['acao'])){
    
    $sql = $pdo->prepare("SELECT * FROM categoria");

    $sql->execute();
    
    $info = $sql->fetchAll();
    
    echo '<br/>';
    
    

    foreach ($info as $key => $value) {
        $categoria_id = $value['id'];
        echo 'Showing posts from: ' .$value['nome'];
        echo '<br/>';
        $sql = $pdo->prepare("SELECT * FROM news WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoNews = $sql->fetchAll();
        
    
    
    foreach ($infoNews as $key => $value) {
      echo "<h1>".$value['titulo']."</h1>";
      echo  "<p>".$value['conteudo']."</p>";
    }
}
    

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
    <form action="" method="post">

       <input type="submit" name="acao" value="Noticias">
       <input type="text" name="name" value="">

    </form>
</body>
</html>