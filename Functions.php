<?php


#Constants são criadas assim:

define('NOME', 'Kelwin');
echo "olá ".NOME; # se declara assim constants
echo "<br/>";

#Variáveis:
$nome = 'Kelwin';

echo "<br/>";


#Concatenação
echo "Olá, " .$nome;

echo "<br/>";


#Array 
$places = array('chave1' => 'Kelwin', 'Joao', 'Gabi');
#as chaves são os index, então João é o index 0;
echo "<br/>";



#Foreach, percorre arrays e chaves
foreach ($places as $key => $value){
    echo $value.' ';
}
echo "<br/>";



#Percorrendo array com for, porem buga se tiver alguma chave
for($i = 0; $i < sizeof($places); $i++){
    echo $nome[$i];
}
echo "<br/>";



#while laço de repetição
$num = 0;
while($num < 5){
    echo 'Mensagem'.$num;
    echo '<br/>';
    $num++;
}




?>






