<?php 
//Crie uma variável $numero contendo um número inteiro positivo.
//Utilizando for, calcule o fatorial desse número. Não utilize funções prontas para realizar o cálculo.
//5! = 5 x 4 x 3 x 2 x 1 = 120

$num = 5;
$fatorialSoma = 1;

for ($i = $num; $i != 0 ; $i--) { 
    $fatorialSoma = $fatorialSoma * $i;
    echo $fatorialSoma . "X" . $i . "\n";

}

echo $num . "!" . $fatorialSoma;


?>