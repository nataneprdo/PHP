<?php 


//MATCH é parecido com o SWITCH, mas faz comparação de identidade. Ele verifica se os valores apresentados abtem com o valor de entrada.

$num = 5;
$nome = match($num){
    1 => 'Um',
    2 => 'Dois',
    3 => 'Três',
    4 => 'Quatro',
    5 => 'Cinco', 

};
echo $nome;

