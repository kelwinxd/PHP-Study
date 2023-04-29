<?php
class Filha extends Abs{
    public function Hello(){
        $this->Privado();
        echo 'Hello';
        
    }
    protected $var = 'Protegida pode ser instanciado na classe Pai, diferente do Private';
    private function Privado(){
        echo '<br/> Privado ativado ';

    }

    public function One(){
        echo 5 + 4;
        echo '<br/>';
    }
}


final class Bastardo{

    public $var = 'final class não pode ser herdado';
}


class Pai extends Filha {
    public function World(){
        #voce pode instaciar funcoes da filha
        
        $this->Hello();
        echo ' World!';
        echo $this->var;

        #self se refere a metodo e atributos estaticos dentro da propria classe
        self::Static();

        #chamando classe abstrata herdada pela filha
        $this->Var();
}

    public static function Static(){
        echo '<br/>funcao estatica chamada';
    }     


     public function One(){
        #Aqui voce chama a funcao passada antes de ser reescrita
        parent::One();

        #Voce reescrever funcoes filhas
        echo 'Agora é um texto';
     } 
    }

abstract class Abs{
    public  function Var(){
       echo "Essa função serve apenas para ser chamada e herdada, nunca poderá ser instanciada diretamente.";
    }
    
    


}




$inherit = new Pai;
echo $inherit->World();
echo '<br/>';
echo $inherit->One();

echo '<br/>';
#chamando a funcao abstract atraves da classe filha
echo $inherit->Var();




?>