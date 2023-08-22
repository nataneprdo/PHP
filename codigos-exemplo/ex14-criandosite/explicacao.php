<?php 


//ARQUIVO PRINCIPAL

//O INCLUDE possibilita incluir outros aaarquivos php existentes numa pagina principal. Caso o arquivo nao exista, ele mostra uma mensagem de warning na tela, mas executa os outros que tem ou ignora se o que nao for existente estiver num @

//include 'a.php';
//include 'b.php';
//include 'c.php';
//include 'd.php';


//o REQUIRE inclui os valores igual ao INCLUDE, mas diferentemente dele, ele da um erro fatal se foi colocado um arquivo que nao existe, impossibilitando de executar as outras coisas tb.

//require 'a.php';
//require 'b.php';
//require 'c.php';
//require 'd.php';

//echo 'outras coisas'//;

##O REQUIRE_ONCE ele possibilita colocar o arquivo apenas uma vez. Caso o site esteja muito grande e o mesmo arquivo for adicionado de novo, ele impossibilita disso acontecer, porém, mostra o erro fatal se houver a tentativa de adicionar um aaarquivo que no existe.

//require_once 'a.php';
//require_once 'b.php';
//require_once 'c.php';
//require_once 'd.php';
//require_once 'e.php';<= erro fa//tal

##O INCLUDE_ONCE possibilita colocaar apenas uma vez o arquivo sem repetir, igual o REQUIRE_ONCE faz, porém, ele aparece warning na tela quando houver um arquivo não existente tentando ser adicionado. Ele pode ser ignorado se colocar um @ antes do include_once.

//include_once 'a.php';
//include_once 'b.php';
//include_once 'c.php';
//include_once 'd.php';
//include_once 'e.php'; <== mensagem warning!//