<?php 
//Utilizando variáveis e uma estrutura for, exiba os 15 primeiros números da sequência de
//Fibonacci.
//Os próximos números devem ser calculados pelo programa, e não escritos manualmente.
//0 1 1 2 3 5 8 13 21 34 ...

$a = 1;
$b = 1;
$c = 0;
echo $a . "\n" . $b . "\n";
for ($i=0; $i <=12 ; $i++) { 
    
    $c = $a + $b;
    $a = $b;
    $b = $c;

    echo $c."\n";
}
?>