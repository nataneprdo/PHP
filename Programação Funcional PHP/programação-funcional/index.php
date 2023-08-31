<?php 

//PROGRAMAÇÃO FUNCIONAL COM PHP

//expressões de funções:

function soma_1($a,$b){ 
    //função soma é considerado então um procedimentos, pois não retorna nenhuma informação
    //dentro dos parentesis vai as variaveis que serão chamadas
    echo $a + $b;//com echo somente imprime o resultado                        //variaveis declaradas dentro das funções serão válidas somente dentro dessas funções

}
soma_1(2,2); //na chamada da função tem os argumentos os valores passados a ela que serão transferidos para os parametros que serão utilizados dentro da função

function soma_2($a,$b){ 
    //funções propriamente dita
    return $a + $b; //utiliza o return
}
echo soma_2(2,3);

    
//funções anônimas: são funções que nao tem um nome dados a elas
//esse tipo de função pode ser utilizada dependendo da aplicação que vai ser utilizada
function ($a, $b){
    return $a + $b;
};

//first-class function: função de primeira classe, caracteristica de uma linguagem de programação de que uma variavel receba uma função, portanto, uma variavel pode receber uma função

//function expression: é quando você cria uma função anonima e aplica ela a uma variavel
$soma_3 = function($a, $b){
    return $a + $b;
};

echo $soma_3(20,30);

//IIFE(Imediately Invoked Function Expression): executa uma function anonima sem precisar declarar a uma variavel. Aplica parentesis em toda a função.

(function($a, $b){
    echo $a + $b;//return ele retorna dados mas nao mostra na tela
})(20,30); //nesse ultima parentesis que vai ser colocado os parametros utilizados na função

(function($a, $b){echo $a - $b; })(20, 14); //geralmente feito em uma linha como no exemplo 