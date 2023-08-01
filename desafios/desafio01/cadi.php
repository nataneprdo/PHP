<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
        <main>
            <?php 
            $numero = $_GET["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O número escolhido foi <strong> $numero </strong></br>";
            echo "O antecessor de <strong>$numero</strong> é <strong>$antecessor </strong></br>";
            echo "o sucessor de <strong>$numero</strong> é <strong>$sucessor</strong>";
            ?>
        </main>
    </header>
    <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
</body>
</html>