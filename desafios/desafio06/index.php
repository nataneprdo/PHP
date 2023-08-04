<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dvdendo = $_GET['dendo'] ?? 0;
        $dvsor = $_GET['sor'] ?? 1;
    ?> 
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dendo">Dividendo:</label>
            <input type="number" name="dendo" id="dendo" min=0 value="<?=$dvdendo?>">
            <label for="sor">Divisor:</label>
            <input type="number" name="sor" id="sor" min=1  value="<?=$dvsor?>">
            <input type="submit" value="analisar">
        </form>
    </main>   
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $quociente = intdiv($dvdendo, $dvsor);
            $resto = $dvdendo % $dvsor;
        ?>
        <table class="divisao">
            <tr>
               <td><?=$dvdendo?></td>
               <td><?=$dvsor?></td> 
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>