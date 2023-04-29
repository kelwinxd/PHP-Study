<?php 


namespace Session1;
use Session2\Class2;


class Class1{


    function __construct(){
        
        $frase = new Class2;
        echo '<br/>'.$frase->Test();
        
        echo 'Testando classe1';
    }
}



?>