<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $ano = $_GET['ano'] ?? '2000';
        $ano2  = $_GET['ano2'] ?? $atual;
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Em que ano você nasceu?</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>" max="<?=$atual?>">
            <label for="ano2">Quer saber sua idade em que ano?(*Atualmente estamos em <?=$atual?>)</label>
            <input type="number" name="ano2" id="ano2" min="1900" value="<?=$atual?>">
            <input type="submit" value="calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
             $idade = $ano2 - $ano;
             echo "Quem nasceu em $ano vai ter <strong>$idade</strong> anos em $ano2!";       
    
        ?>


    </section>
</body>
</html>