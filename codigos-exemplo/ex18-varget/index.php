<?php 

//VARIAVEL DO TIPO GET

$nome = addslashes($_GET['produto']);
$preco = addslashes($_GET['preco']);
$moeda = addslashes($_GET['moeda']);

echo "O produto $nome custa $preco $moeda.";