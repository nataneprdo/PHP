<?php 

//Variaveis superglobais: $GLOBALS
//Ela permite uma validação de variaveis em qualquer lugar. Quando há uma function, essa variavel superglobal precisa ser declarada dentro do escopo da function:

//Deve tomar cuidado ao utilizar a variavel global pois ela se torna disponivel para utilizar em qualquer escopo, recomendado utilizar somente no escolo local!!

$nome = "O lego";

function nome_da_funcao($variavel_oculta){
    $variavel_oculta = 'segredo';
    $GLOBALS['variavel_oculta'] = $variavel_oculta;
}
nome_da_funcao($nome);
echo $variavel_oculta;
 