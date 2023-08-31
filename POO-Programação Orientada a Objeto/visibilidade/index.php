<?php 

require_once 'Pessoa.php';

$pessoa1 = new Pessoa();
$pessoa1->nome = 'José';

echo $pessoa1->a;
//echo $pessoa1->b; -> assim nao funciona
//echo $pessoa1->c;-> assim nao funciona

//assim funciona:

$pessoa1->ler_b();
//$pessoa1->ler_c();