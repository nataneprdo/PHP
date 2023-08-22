<?php


//COMANDO SWITCH

##quando as estruturas condicionais forem muito utilizadas(if, elseif, else), utiliza-se uma form amais simplificada chamado SWITCH, com o comando CASE que sempre se encerra com BREAK.

$estado = ['mg', 'sp', 'rj', 'es', 'pa', 'am', 'pr', 'sc', 'mt','ms', 'pe', 'al'];

foreach($estado as $estado){
    echo '<br>';
    switch($estado){
        case 'mg': echo 'Minas Gerais'; break;
        case 'sp': echo 'São Paulo'; break;
        case 'rj': echo 'Rio de Janeiro'; break;
        case 'es': echo 'Espirito Santo'; break;
        case 'pa': echo 'Pará'; break;
        case 'am': echo 'Amazonas'; break;
        case 'pr': echo 'Paraná'; break;
        case 'sc': echo 'Santa Catarina'; break;
        case 'mt': echo 'Mato Grosso'; break;
        case 'ms': echo 'Mato Grosso do Sul'; break;
    }
}


#EXEMPLO DE COMO ERA!!!

//if($estado == 'mg){
    //echo 'Minas Gerais';
//}
//if($estado == 'mg){
    //echo 'Minas Gerais';
//}
//if($estado == 'mg){
    //echo 'Minas Gerais';
//}