<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1320;
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
        <p>*Considerando salário mínimo atual de <strong>R$1320,00</strong></p>
            <input type="submit" value="calcular">
        </form>
    </main>
        <section id="resultado">
        <h2>Resultado final</h2>
            <?php 
                $quanto = intdiv($salario , $minimo);
                $resto = $salario % $minimo;

                echo "Pra quem recebe <strong>R$ ".number_format($salario,2,",",".")."</strong> de salário, <br>";

                echo "a quantidade de salários mínimos recebido é <strong>".number_format($quanto, 0, ",",".")."</strong>";

                echo " e o valor a mais é <strong>R$".number_format($resto, 2, ",",".")."</strong>";
            
            ?>

        </section>
  
</body>
</html>