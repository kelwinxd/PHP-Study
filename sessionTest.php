<?php 
session_start();
echo $_SESSION['name'];


#para tirar uma sessão
unset($_SESSION['name']);

#para destruir todas as sessões
session_destroy();


?>