<?php 
//Utilizando while, faça uma contagem regressiva de 20 até 0.
//Quando chegar a zero, exiba "Contagem encerrada!".
//Além disso, sempre que o número atual for múltiplo de 5, exiba ao lado "Múltiplo de 5".
$a = 20;

while ($a != 0){
    echo "$a\n";
    $a--;
    if ($a % 5 === 0) {
        echo "Múltiplo de 5: ".$a."\n";
    }

}
 echo "Contagem encerrada!";

?>