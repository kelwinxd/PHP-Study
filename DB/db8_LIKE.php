<?php



$Config =  [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", ];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=study','root','root8',$Config);
    $sql = $pdo -> query("SELECT * FROM people WHERE nome LIKE 'd%' AND id IN(1,2,3,12) ");
#selecione tudo de people onde o nome comece com d e os id sejam iguais a ()

    $sql->execute();
    $users1 = $sql -> fetchAll(PDO::FETCH_ASSOC);

    foreach ($users1 as $key => $value) {
        echo $value['nome'] . '<br>';
    }
   
} catch (PDOException $pdoException) {
    // Tratamento de erros específicos do PDO
    echo 'Erro do PDO: ' . $pdoException->getMessage();
}








?>