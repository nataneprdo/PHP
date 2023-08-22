<?php 

//lendo arquivo usando função file: vai ler todo o arquivo de uma vez e joga em um array

$arquivo = file('texto.txt');
foreach($arquivo as $linha){
    //echo $linha .'<br><br>';
}

//var_dump($arquivo);//para ver o tipo do texto do arquivo

//O FILE_GET_CONTENTS ele le o conteudo todo e joga como se fosse uma grande texto => arquivo para uma grande string


$texto = file_get_contents('texto.txt');
echo $texto;

