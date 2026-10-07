<?php 
//Considere o vetor abaixo. Crie um programa que informe quantas vezes cada número aparece.
//Evite imprimir o mesmo número mais de uma vez.
//$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];
//2 aparece 3 vezes
//5 aparece 4 vezes
//8 aparece 2 vezes
//10 aparece 1 vez

$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];
$contagem = [];

foreach($numeros as $numero){

    if(isset($contagem[$numero])){
        $contagem[$numero]++;  // 2 - 
    }else{
        $contagem[$numero] = 1;
    }
}

foreach ($contagem as $chave => $valor) {
    echo $chave . " aparece " . $valor . " vezes\n";
}



?>