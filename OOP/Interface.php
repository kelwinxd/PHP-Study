<?php

#interface se assemelha ao abstract, não pode ser intanciado
#porem, na interface nao se desenvolve metodos apenas o apresenta
interface Interface1{

    public function Sum($n,$n2);
}

#para chamar uma interface é preciso usar Implements, e não extends
class Soma implements Interface1{
    public function Sum($n,$n2){
        echo $n+$n2;
    }
}


$soma = new Soma;
echo $soma->Sum(10,255);

?>