<?php 

$nome = "Natane";

$head = "<!DOCTYPE html>
<html>
    <head>
        <title>Site PHP de $nome</title>
    </head>";

$body = "<body>
        <h1>Meu nome é $nome</h1>
        <p>Olá $nome! Tudo bem com você?</p>
    </body>
</html>";

echo $head . $body;