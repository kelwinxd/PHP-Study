<?php
#STR_REPLACE - Substitui

$phrase = "take a gamble, bro";
$new_phrase = str_replace("bro", "Kel", $phrase);
echo $new_phrase;

# SUBSTR - recorta pelo index, igual o splice

$new_phrase2 = substr($phrase, 0, 5);
echo "<br/>";

echo $new_phrase2;

#EXPLODE e IMPLODE 
#EXPLODE - separa a string e vira Array ('',$frase)
#IMPLODE - Junta uma Array
$saying = "once upon a time";
$instance = array('esta','era','array');
$neww = explode(' ',$saying);
//print_r($withExplode) # para printar arrays
$neww = implode(' ',$instance);

echo $neww;

#wait some seconds to show the content
sleep(3);
echo 'After 3 seconds, here we are!'






?>