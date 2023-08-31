<?php 

//herança

require_once 'people.php';


$pessoa1 = new Pessoa();
//acessar as informações de um modo protect só pode ser reaalizado a partir do metodo get e set, diretamente com um echo nao pode ser feito.

$pessoa1->setNome('Natane ');
$pessoa1->setCpf('000.000.000-09');
echo 'Nome: '.$pessoa1->getNome().'<br>CPF: '.$pessoa1->getCpf();//vai ser retornado o valor chamado na function onde tem o return

