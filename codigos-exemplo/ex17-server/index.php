<?php 

//Utilizando o $_SERVER para obterinformaçõesdo servidor!

//$print_r($_SERVER);

//foreach($_SERVER as $chave => $valor){
    //echo $chave.'<br>'.$valor.'<br>'.$chave;
//}

//para pegar o nome do servidor utilizado:
//echo $_SERVER['SERVER_NAME'];

//para descobrir qual osistema operacional do usuario:
echo $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];