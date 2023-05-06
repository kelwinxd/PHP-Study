<?php
try {
    $con = new PDO('mysql:host=localhost;dbname=study','root','root8',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $con->setAttribute(PDO::ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = $con -> prepare("SELECT * FROM teste WHERE id=:id");
    $sql->bindValue(":id",2);
    $sql->execute();
    $res = $sql->fetch(PDO::FETCH_ASSOC);

    foreach ($variable as $key => $value) {
        # code...
    }



    


} catch (PDOException $e) {
   echo "<h2 style='text-align:center;'>Erro com banco de dados:  </h2>".$e;
}
 catch(Excepetion $e){
echo "Erro".$e;
 }


?>