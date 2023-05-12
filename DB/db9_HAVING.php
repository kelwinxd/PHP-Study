<?php 

$Config =  [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", ];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=study','root','root8',$Config);
    $sql = $pdo -> query("SELECT * FROM people GROUP BY cargo HAVING idade > 19 ");
    #group by e having geralmente são usados juntos, para filtragem

    $sql->execute();
    $users1 = $sql -> fetchAll(PDO::FETCH_ASSOC);

    foreach ($users1 as $key => $value) {
        echo $value['nome'] . ' | '.$value['idade'].'</br>';
    }
   
} catch (PDOException $pdoException) {
    // Tratamento de erros específicos do PDO
    echo 'Erro do PDO: ' . $pdoException->getMessage();
}





?>