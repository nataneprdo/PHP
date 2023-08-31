<?php 

//propriedades

require_once 'people.php';

$pessoa1 = new Pessoa();

$pessoa1->setNome('Natane');

echo $pessoa1->getNome();