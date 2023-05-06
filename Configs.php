<?php

define('HOST','localhost');
define('DB','study');
define('USER','roota');
define('PASS','root8');


try {
    $con = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
#mysql_attr_init_command => set names utf8 adiciona simbolos e sinais

} catch ( PDOException $e) {
    #pdoexception pega erros do banco de dados
    echo '<p style="text-align:center; margin-top:200px;font-size:30px;">Erro ao se conectar ao banco de dados! </p> ';
}
  catch (Exception $e){
         echo 'Erro: ' .$e->getMessage();

  }




?>