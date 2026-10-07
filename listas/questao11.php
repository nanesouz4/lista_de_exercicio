<?php 
//Maior e menor valor de um vetor
//Considere o vetor abaixo. Percorra-o e descubra:
//$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];
//● o maior número;
//● o menor número;
//● a posição do maior número;
//● a posição do menor número.

$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];
$max = null;
$min = null;
$min_indice = null;
$max_indice = null;

foreach ($numeros as $indice => $numero){
    if($max === null || $max < $numero){
        $max = $numero;
        $max_indice = $indice;
    }

    if($min === null || $min > $numero){
        $min = $numero;
        $min_indice = $indice;
    }
} 
echo "O Maior número é:".$max." E está na posição \n". $numeros[$max_indice];
echo "O Menor número é:".$min."\n";


?>