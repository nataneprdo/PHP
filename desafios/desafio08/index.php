<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="0">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $cubica = pow($numero,1/3);
            $quadrada = sqrt($numero);

            echo "<ul><li>A raíz quadrada de $numero é <strong>" . number_format($quadrada, 3, ",", "."). "</strong><br></li>";
            
            echo "<li>E a raíz cubica de $numero é <strong>" . number_format($cubica, 3, ",", "."). "</strong></li></ul>";
        ?>
    </section>
    
</body>
</html>