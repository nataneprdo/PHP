<?php 


//comando for

//for($i = 0; $i < 5; $i ++){ //$i = $i + 1
    //echo 'O valor de $i é '.$i.'<br>';
//}
//echo 'Comando encerrado';

//$lista_de_coisas = [1, 2, 3, 4, 5];      //['abacate', 'bola', 'casa', TRUE, 3.14, 10, 'cachorro'];

//for($i = 0; $i < count($lista_de_coisas); $i ++){
    //echo $lista_de_coisas[$i].'<br>';
//}

//for($i = count($lista_de_coisas) - 1; $i >= 0; $i--){
    //echo $lista_de_coisas[$i].'<br>';
//}

//COMANDO CONSTRUTOR FOREACH

$lista_de_coisas = [1, 2, 3, 4, 5];

foreach($lista_de_coisas as $item){
    echo 'O valor atual de $item é '.$item. '<br>';
}

