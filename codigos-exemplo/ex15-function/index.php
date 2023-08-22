<?php

//$n1 = 2;
//$n2 = 2;
//$soma = $n1 + $n2;


//echo "A soma de $n1 e $n2 é igual a $soma <br>";

//$n1 = 2;
//$n2 = 5;
//$soma = $n1 + $n2;

//echo "A soma de $n1 e $n2 é igual a $soma <br>";

##COMO FAZER A FUNÇÃO
//ESCOPO da função só é valida dentro da função, portanto, se uma var que está declarada dentro da function tentar ser alterada fora dela ou impressa fora da function, nao vai acontecer nada.
//Se na chamada da função for declarado mais de 2 num ou com valores a mais do que está sendo solicitado na função, eles serão simplesmente ignorados e serem pegos os valores necessarios.
//Função é quando precisa impimir ou retornar varias vezes a mesma coisa, vc pode colocar numa função para simplificar.
function soma($n1, $n2){
    $soma = $n1 + $n2;
    echo "A soma de $n1 com $n2 é igual a $soma";

    return $soma;
}
# 2 + 3 = x
# x + 5
$x = soma(13, 50);
echo '<br>';
$y= soma($x, 5);
echo '<br>';
//RETURN retona a informação de dentro do código

echo 'O resultado é '.$y;