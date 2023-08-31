<?php 

//ARROW FUNCTIONS : FUNÇÕES DE SETA
//Forma mais simplificada e concisa para funções anônimas

//FN : UTILIZADA PARA DECLARAR ESSE TIPO DE FUNÇÃO
//=> : A SETA PROPRIAMENTE DITA

$soma = fn($a, $b) => $a+$b; //a seta representa as chaves e o return e o fn representa o function
echo $soma(99, 1);

$subtração = fn($a, $b) => $a-$b;
echo $subtração(99,1);

$multiplicação = fn($a, $b) => $a*$b;
echo $multiplicação(99, 1);

$divisão = fn($a, $b)=>$a/$b;
echo $divisão(10,2);

$dobro = fn($x) => $x*2;
echo $dobro(10);

