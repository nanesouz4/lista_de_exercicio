<?php 
//Crie uma variável $numero. Desenvolva um programa que determine se o número é primo ou não.
//Um número primo é aquele que possui exatamente dois divisores: 1 e ele mesmo.
//Utilize uma estrutura de repetição e uma estrutura condicional.

$num = 12;
$primo = false;

for ($i = $num - 1; $i >= 1 ; $i--) { 
    if($num % $i === 0 && $i != 1){
        $primo = false;
    }

    if($num % $i === 0 && $i === 1){
        $primo = true;
    }
}

if ($primo) {
    echo "é primo";
}else{
    echo "não é primo";
}

?>