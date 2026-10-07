<?php 
//Considere o vetor abaixo. Desenvolva um algoritmo que encontre o segundo maior número do
//vetor.
//$numeros = [15, 8, 35, 42, 11, 27, 39];
//Maior número: 42
//Segundo maior: 39
//Desafio: Não utilize sort(), rsort() ou funções semelhantes.


$numeros = [15, 8, 35, 42, 11, 27, 39];

$numM = $numeros[0];
$segundoM = null;

foreach($numeros as $numero){
    if($numM < $numero){
        $numM = $numero;
    }

    if($numero < $numM && $segundoM < $numero){
        $segundoM = $numero;
    }
}

echo $numM . "\n";
echo $segundoM;


?>