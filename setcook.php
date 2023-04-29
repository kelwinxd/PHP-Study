<?php 
session_start();

#usado para lembrar senhas e outras coisas
#setcook(var, value, time, path)
setcookie('nome','Kelwin',time() + (60*60*24), '/');

echo $_COOKIE['nome'];



?>