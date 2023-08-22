<?php

//sintaxe alternativa para estruturas de controle

$numero = 10;

//echo $numero;

if ($numero % 2 == 0): ?>
    <p>NUMERO PAR</p>
<?php elseif($numero % 2 == 1): ?>
    <p>NUMERO IMPAR</p>
<?php endif;?>