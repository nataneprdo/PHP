<?php 

//operadores

//% modulo

//$a = 11;
//$b = 2;
//echo $a % $b;

$a = 102;
$b = 200;

if($a % 2 == 0 and $a > $b){
    echo "É um número par e maior que $b";
}
elseif($a % 2 == 1 and $a > $b){
    echo "impar e maior que $b";
}

elseif(($a % 2 == 1) or ($a > $b)){
    echo "impar e maior que $b";
}

elseif(!($a % 2 == 1)){
    echo "A expressão é falsa";
}

