<?php 
 class Constant {
  #assim se declara uma variavel constante no POO
  const PI =  3.14;
  public function __construct(){
    #assim se chama
    echo self::PI;

  }


 }

 new Constant();









?>