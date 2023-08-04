<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $totseg = $_GET['totseg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="totseg">Qual é o total de segundos?</label>
        <input type="number" name="totseg" id="totseg" min="0" step="1" required value="<?=$totseg?>">
        <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($totseg, 2, ",", ".")?> segundos</strong> equivalem a um total de:</p>
        <?php 
            $sobra = $totseg;
            $semana = (int)($sobra / 604_800);
            $sobra1 = ($sobra % 604_800);
            $dias  = (int)($sobra1 / 86_400);
            $sobra2 = ($sobra1 % 86_400);
            $hora = (int)($sobra2 / 3_600);
            $sobra3 = ($sobra2 % 3_600);
            $min = (int)($sobra3 / 60);
            $sobra4 = ($sobra % 60);
            $seg = $sobra;  
        ?>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$seg?> segundos</li>  
        </ul>
    </section>
</body>
</html>