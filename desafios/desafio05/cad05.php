<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style05.css">
    <title>Desafio 05</title>
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? 0;

            echo "<p> Analisando o número <strong>" . number_format($numero, 3,"," ,".") . "</strong> informado pelo usuário: </p>";

            $int = (int)$numero;
            $fra = $numero - $int;

            echo "<ul><li>A parte inteira do número é <strong>".number_format($int, 3, ",",".")."</strong></li>";
            echo "<li>A parte fracionada do número é <strong>".number_format($fra, 3,",",".")."</strong></li>";

        ?>
    </main>
    <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
</body>
</html>