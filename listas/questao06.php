<?php 
//Crie três variáveis com valores numéricos. Utilizando apenas estruturas condicionais, descubra e
//exiba qual é o maior dos três números.
//Não utilize funções prontas como max().
//$a = 15;
//$b = 32;
//$c = 21;

$a = 15;
$b = 32;
$c = 21;


    if ($a > $b && $a > $c) {
        echo "o maior número é $a";
    }
    elseif ($b > $a && $b > $c) {
        echo "o maior número é $b";
    }
    else{
        echo "o maior número é $c";
    }



?>