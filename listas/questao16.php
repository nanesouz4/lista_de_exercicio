<?php 
//Considere o vetor de produtos abaixo. Percorra os produtos e realize as operações solicitadas.
//$produtos = [
//["nome" => "Teclado", "preco" => 120, "quantidade" => 5],
//["nome" => "Mouse", "preco" => 60, "quantidade" => 0],
//["nome" => "Monitor", "preco" => 900, "quantidade" => 3],
//["nome" => "Cabo HDMI", "preco" => 35, "quantidade" => 10],
//["nome" => "Headset", "preco" => 250, "quantidade" => 2]
//];
//● exiba somente os produtos disponíveis;
//● informe quais produtos estão sem estoque;
//● calcule o valor total de cada produto em estoque (preço x quantidade);
//● calcule o valor total de todo o estoque;
//● informe qual produto representa o maior valor financeiro no estoque.

$produtos = [
["nome" => "Teclado", "preco" => 120, "quantidade" => 5],
["nome" => "Mouse", "preco" => 60, "quantidade" => 0],
["nome" => "Monitor", "preco" => 900, "quantidade" => 3],
["nome" => "Cabo HDMI", "preco" => 35, "quantidade" => 10],
["nome" => "Headset", "preco" => 250, "quantidade" => 2]
];

$valorT = 0;
$maiorV = null;

foreach($produtos as $key => $produto){
    $qtdAtual = $produto["quantidade"];
    $preco = $produto["preco"]; 

    if($qtdAtual != 0) {
        $valorP = $preco * $qtdAtual;
        $valorT = $valorT + $valorP;
        echo "\nOs produtos disponíveis são: " . $produto["nome"] . " - e seu valor total em estoque é: ". $valorP;

    }else{
        echo "\n".$produto["nome"].", está com estoque zerado!";
    }

    if ($maiorV === null || $maiorV < $preco) {
        $maiorV = $preco;
    }
    
}
echo "\nO Valor total em estoque é: ". $valorT;
echo "\nO produto com maior preço é: ".$maiorV;




?>