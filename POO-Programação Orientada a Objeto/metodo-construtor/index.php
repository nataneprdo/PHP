<?php 

//herança

require_once 'people.php';


$pessoa1 = new Pessoa('Natane','000.000.000-09');
//acessar as informações de um modo protect só pode ser realizado a partir do metodo get e set, diretamente com um echo nao pode ser feito.


echo 'Nome: '.$pessoa1->getNome().'<br>CPF: '.$pessoa1->getCpf();//vai ser retornado o valor chamado na function onde tem o return

echo '<br>';

$pessoa2 = new Pessoa('Eduardo','000.000.000-11');
echo 'Nome: '.$pessoa2->getNome().'<br>CPF: '.$pessoa2->getCpf();