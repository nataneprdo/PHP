<?php 

//OPERADOR DE RESOLUÇÃO DE ESCOPO ::
//Utilizando para acessar metodos e propriedades dentro de uma classe

require_once 'people.php';


$pessoa1 = new Pessoa('Natane','000.000.000-00');
//acessar as informações de um modo protect só pode ser realizado a partir do metodo get e set, diretamente com um echo nao pode ser feito.


echo 'Nome: '.$pessoa1->getNome().'<br>CPF: '.$pessoa1->getCpf();//vai ser retornado o valor chamado na function onde tem o return

echo '<br>';

$pessoa2 = new Pessoa('Eduardo','000.000.00-11');
echo 'Nome: '.$pessoa2->getNome().'<br>CPF: '.$pessoa2->getCpf();


