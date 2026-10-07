<?php 
//Utilizando for, percorra os números de 1 até 30.
//Para cada número, exiba se ele é par ou ímpar.
//1 - Ímpar
//2 - Par
//3 - Ímpar

$i = 1;

for ($i=1; $i <= 30 ; $i++) { 
    if ($i%2 === 0) {
        echo "$i - par ";
    }else {
        echo "$i - ímpar ";
    }
}
?>