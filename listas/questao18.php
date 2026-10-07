<?php 
//Crie uma classe Funcionario contendo os atributos nome, salario e cargo.
//Depois, crie pelo menos 5 objetos e armazene-os em um vetor.
//Percorra o vetor, exiba os dados, calcule a média salarial, descubra o maior e o menor salário e
//conte quantos funcionários recebem acima da média.
//Em seguida, aplique os aumentos abaixo e exiba o salário antigo e o novo salário de cada
//funcionário.
//Salário abaixo de R$ 2.000 -> aumento de 15%
//Salário entre R$ 2.000 e R$ 5.000 -> aumento de 10%
//Salário acima de R$ 5.000 -> aumento de 5%

class funcionario{
    public string $nome;
    public float $salario;
    public string $cargo;


    public function __construct(string $nome, float $salario, string $cargo)
    {
        $this ->nome = $nome;
        $this ->salario = $salario;
        $this ->cargo = $cargo;
        
    }




}

$funcionarios = [ 
    new funcionario("clarice", 15000, "CEO"),
    new funcionario("Anelize", 14500, "secretaria"),
    new funcionario("Beatriz", 600, "RH"),
    new funcionario("Andrielly", 10000, "SF"),
    new funcionario("Jayane", 15001, "secretaria")
];

$soma = 0;
$maior_S = null;
$menor_S = null;
$count = 0;
$media = 0;

foreach($funcionarios as $funcionario){

    if($funcionario->salario < 2000){
        echo "\n".$funcionario->nome . ":\n" . "antigo: " . $funcionario->salario . " - novo : " .
         ( $funcionario->salario += ($funcionario->salario * 0.15))  . "\n" .$funcionario->cargo;
    }
    elseif($funcionario->salario > 2000 && $funcionario->salario < 5000){
        echo "\n".$funcionario->nome . ":\n" . "antigo: " . $funcionario->salario . " - novo : " . 
        ( $funcionario->salario += ($funcionario->salario * 0.10))  . "\n" .$funcionario->cargo;
    }elseif($funcionario->salario > 5000){
        echo "\n" . $funcionario->nome . ":\n" . "antigo: " . $funcionario->salario . " - novo : " . 
        ($funcionario->salario += ($funcionario->salario *0.10)) . "\n" . $funcionario->cargo;
    }

    else {
        echo "\n".$funcionario->nome. "\n" . $funcionario->salario . "\n" .$funcionario->cargo;
    }
    echo "\n--------------------------------\n";

    $soma += $funcionario ->salario;
    $count++;

    if($maior_S === null || $maior_S < $funcionario->salario ){
        $maior_S = $funcionario->salario;
    }

    if($menor_S === null || $menor_S > $funcionario->salario ){
        $menor_S = $funcionario->salario;
    }

   $media = $soma / $count;
}

foreach($funcionarios as $funcionario){
    if($media < $funcionario->salario){
        echo "\nOs salários acima da média são: ". $funcionario ->salario ."\n";
   }

}

echo "A média é: ". $media;
echo "\nO maior salário é: " . $maior_S;
echo "\nO menor salário é: " . $menor_S;

?>