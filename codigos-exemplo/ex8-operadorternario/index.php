<?php 

//Operador Ternário

//$variavel = (expressão) ? faça x : faça y

$numero = 11;
//$tipo = '';

//if ($numero % 2 == 0){
    //$tipo = "Par";
//}
//else {
   // $tipo = "Impar";
//}

//com ternário

//$tipo = $numero % 2 == 0 ? "PAR" : "IMPAR";

//$tipo = $numero != 0 ? 'SIM' : 'NAO';

$tipo = $numero === 11 ? 'SIM' : 'NAO';
echo $tipo;