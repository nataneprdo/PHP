<?php

//class NomeDaClasse{

//public $propriedade = '';

    //public function metodo(){
        //echo $this->propriedade;
    //}
//}

//$objeto = new NomeDaClasse();

include 'pessoa.php';

$pessoa1 = new Pessoa();
$pessoa1->nome = 'José';
$pessoa1->saudar();

$pessoa2 = new Pessoa();
$pessoa2->nome = 'Maria';
$pessoa2->saudar();
