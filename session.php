<?php 

session_start();


#usado para fazer validação de login
if(isset($_SESSION['name'])){

    $_SESSION['name'] = 'Kelwin';
}



?>