<?php 
//Crie uma variável $numero. Utilizando if e else, informe:
//● se o número é múltiplo de 3;
//● se o número é múltiplo de 5;
//● se é múltiplo de 3 e 5 ao mesmo tempo;
//● ou se não é múltiplo de nenhum dos dois.

$num = 15;

function multiplo($num){
    if ($num % 3 === 0 && $num % 5 === 0) {
        echo "é múltiplo de 3 e 5 ao mesmo tempo";
    }elseif ($num % 3 === 0) {
        echo "o número é múltiplo de 3";
    }elseif ($num % 5 === 0) {
        echo "o número é múltiplo de 5";
    }else{
        echo "não é múltiplo de nenhum dos dois.";
    }
}

multiplo($num);


?>