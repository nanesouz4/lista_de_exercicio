<?php
//Considere os times abaixo. Vitória vale 3 pontos, empate vale 1 ponto e derrota vale 0 pontos.
//Calcule a pontuação de cada time e descubra as informações solicitadas.
//$times = [
//["nome" => "Time A", "vitorias" => 5, "empates" => 2, "derrotas" => 1],
//["nome" => "Time B", "vitorias" => 4, "empates" => 4, "derrotas" => 0],
//["nome" => "Time C", "vitorias" => 6, "empates" => 0, "derrotas" => 2],
//["nome" => "Time D", "vitorias" => 3, "empates" => 3, "derrotas" => 2]
//];
//● qual time possui mais pontos;
//● qual possui menos pontos;
//● qual possui mais vitórias;
//● quantos pontos existem somando todos os times.
//Desafio: Em caso de empate na pontuação, utilize o número de vitórias como critério de
//desempate.

$times = [
["nome" => "Time A", "vitorias" => 5, "empates" => 2, "derrotas" => 1],
["nome" => "Time B", "vitorias" => 4, "empates" => 4, "derrotas" => 0],
["nome" => "Time C", "vitorias" => 6, "empates" => 0, "derrotas" => 2],
["nome" => "Time D", "vitorias" => 3, "empates" => 3, "derrotas" => 2]
];

$maiorP = null;//valor
$pontMa =null;//indice
$menorP = null;
$pontMe = null;
$vtr = null;
$mVtr =  null;

foreach($times as $key => $time){
    $vitorias = $time["vitorias"];
    $vitoria = $time["vitorias"] * 3;
    $empate = $time["empates"] * 1;
    $derrota = $time["derrotas"] * 1;
    $pontos = $vitoria + $empate + $derrota;
    $pontosT = $pontosT + $pontos;

    if($maiorP === null || $maiorP < $pontos){
        $maiorP = $pontos;
        $pontMa = $key;

    }

    if($menorP === null || $menorP > $pontos){
        $menorP = $pontos;
        $pontMe = $key;
    }

    if($vtr === null || $vtr < $vitorias){
        $vtr = $vitorias;
        $mVtr = $key;
    }

   // if($pontos === $pontos){
     //   $
   // }

}

echo "O time com maior pontuação foi: ". $times[$pontMa]["nome"]. " - com ".$maiorP. " pontos";
echo "\nO time com menor pontuação foi: ". $times[$pontMe]["nome"]. " - com ".$menorP. " pontos";
echo "\nO time com mais vitórias foi: " . $times[$mVtr]["nome"]. " - com ".$vtr. " vitorias";
echo "\nO total de pontos é: " . $pontosT;

?>