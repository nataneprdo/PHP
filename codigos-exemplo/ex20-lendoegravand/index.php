<?php 

//lendo arquivos
//FOPEN é utilizado para ler e abrir arquivos
//Atribui-se uma variavel para o fopen e dentro dos parenteses o arquivo e como vai ser a forma de abrir, se somente leitura ou tambem escrita.

$arquivo = fopen('texto.txt','r');

//gravando arquivos em outro

$gravar = fopen('primeira_palavra.txt','w');

while (($linha = fgets($arquivo, 4096)) !== false){
    $palavras = explode(' ',$linha);
    $primeira_palavra = $palavras[0];

    //gravar o arquivo
fwrite($gravar, $primeira_palavra);

}

fclose($gravar);
fclose($arquivo);


//a variavel linha recebe entao o fgets que tem como função de ler as linhas, recebe o nome do arquivo que será aberto, a quantidade maxima de letras por linha e coloca-se o !== false para mostrar caso algo de errado, posteriormente, imprime com o echo o nome da variavellinha para mostrar o arquivo carregado

//while(($linha = fgets($arquivo, 4096)) !== false){
    //echo $linha;
//}