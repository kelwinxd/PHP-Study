<?php

#private só acessa dentro da classe

class People 
{
  private $var1;
  public $var2;

  public function walk(){
    echo 'Walking';
  }
  
  public static $var3 = 'static';

  public function setVar($var1){
    $this->var1 = $var1;
    return $this->var1. ' e contatenando';
  }

}

?>