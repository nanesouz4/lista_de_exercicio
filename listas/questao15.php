<?php 
//Considere o vetor de alunos abaixo. Para cada aluno, calcule sua média, exiba nome e média e
//classifique-o como Aprovado (média >= 6) ou Reprovado (média < 6).
//Ao final, informe o aluno com maior média, o aluno com menor média e a média geral da turma.
//$alunos = [
//["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
//["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
//["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
//["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
//["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
//];

$alunos = [
    ["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
    ["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
    ["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
    ["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
    ["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
];

$mediaT = "0";
$soma = "0";
$maiorValor = null; // guarda o VALOR da maior média
$menorValor = null; // guarda o VALOR da menor média
$mediaMa = null;     // guarda o ÍNDICE do aluno com maior média
$mediaMe = null;     // guarda o ÍNDICE do aluno com menor média

foreach ($alunos as $key => $aluno) {
    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;

    echo "Nome: " . $aluno["nome"] . " - Média: " . $media . " - ";

    if ($media >= 6) {
        echo "Aprovado\n";
    } else {
        echo "Reprovado\n";
    }

    // Define a maior média
    if ($maiorValor === null || $media > $maiorValor) {
        $maiorValor = $media;
        $mediaMa = $key;
    }

    // Define a menor média
    if ($menorValor === null || $media < $menorValor) {
        $menorValor = $media;
        $mediaMe = $key;
    }

    $soma = $soma + $media;


}
$mediaT = $soma/count($alunos);
echo "\nA maior média é de: " . $alunos[$mediaMa]["nome"] . " (" . $maiorValor . ")";
echo "\nA menor média é de: " . $alunos[$mediaMe]["nome"] . " (" . $menorValor . ")";
echo "\nA média geral foi: ". $mediaT;

?>