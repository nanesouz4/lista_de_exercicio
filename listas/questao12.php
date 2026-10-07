<?php 
//Considere o vetor abaixo. Percorra-o e calcule:
//$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];
//● a média da turma;
//● quantos alunos possuem nota maior ou igual a 6;
//● quantos alunos possuem nota menor que 6;
//● a maior nota;
//● a menor nota.
//Desafio: Não utilize funções prontas para encontrar o maior e o menor valor.

$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];
$media = 0;
$soma = 0;
$qtdMaior = 0;
$qtdMenor = 0;
$max = $notas[0];
$min = $notas[0];


foreach ($notas as $nota) {
    //nota = 7.5 - 4.0 - 8.5
    $soma = $soma + $nota; //soma = 7.5 - 11.5
    if($nota >= 6){
        $qtdMaior++; //1 - 2
    }else{
        $qtdMenor++; //1
    }

    if ($max < $nota) {
        $max = $nota; // 8.5
    }

    if ($min > $nota) {
        $min = $nota; // 4
    }
}
$media = $soma/count($notas);
echo $media."\n";
echo $qtdMaior."\n";
echo $qtdMenor."\n";
echo $max."\n";
echo $min;


?>