<?php 

    $dbHost = 'dbHost';
    $dbUsername = 'dbusername';
    $dbPassword = 'dbPassword';
    $dbName = 'dbName';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if($conexao->connect_errno){
        //echo"Erro";
    //}
    //else {
        //echo "Conexão efetuada com sucesso";
    //}
?>