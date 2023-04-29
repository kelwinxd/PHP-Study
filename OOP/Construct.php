<?php 
class Magic {
     private $nome;
     private $idade;
  
     #metodo construct é um metodo magico que pode ser diretamente usado a nivel de classe
    public function __construct($n,$i){
         $this->nome = $n;
         $this->idade = $i;
   }

   public function getData(){
    return $this->nome.' '.$this->idade;
   }

}


$people = new Magic('kelwin',25);
echo $people->getData();






?>