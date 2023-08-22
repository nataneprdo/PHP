<?php

//clausulas break e continue


//BREAK 

$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//foreach($lista as $item){

    //echo $item .'<br>';

    //if ($item == 5){
        //break;
    //}
//}
//echo "[encerrado]";

//CONTINUE

foreach($lista as $item){

    if ($item % 2 == 1){
        continue;
    }
    echo $item .'<br>';
}
echo "[encerrado]";
