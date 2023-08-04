<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = $_GET['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="saque">Qual valor você deseja sacar?(R$)<sup>*</sup></label>
        <input type="number" name="saque" id="saque"  step="1" required value="<?$saque?>">
        <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5, R$2 e moeda R$1</p>
        <input type="submit" value="sacar"> 
        </form>
    </main>
        <?php 
            $resto = $saque;
            $tot100 =  floor($resto / 100);
            $resto %= 100;
            $tot50 = floor($resto / 50);
            $resto %= 50;
            $tot20 = floor($resto / 20);
            $resto %= 20;
            $tot10 = floor($resto / 10);
            $resto %= 10;
            $tot5 = floor($resto / 5);
            $resto %= 5;
            $tot2 = floor($resto / 2);
            $resto %= 2;
            $tot1 = floor($resto / 1);
            $resto %= 1;
        ?>
    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguinte notas:</p>
        <ul>
            <li><img src="100-reais.jpg" alt="Nota-de-100" class="nota">x<?=$tot100?></li>
            <li><img src="50-reais.jpg" alt="Nota-de-50" class="nota">x<?=$tot50?></li>
            <li><img src="20-reais.jpg" alt="Nota-de-20" class="nota">x<?=$tot20?></li>
            <li><img src="10-reais.jpg" alt="Nota-de-10" class="nota">x<?=$tot10?></li>
            <li><img src="5-reais.jpg" alt="Nota-de-5" class="nota">x<?=$tot5?></li>
            <li><img src="2-reais.jpg" alt="Nota-de-2" class="nota">x<?=$tot2?></li>
            <li><img src="1-real.jpg" alt="moeda-1" class="nota">x<?=$tot1?></li>
        </ul>
    </section>
</body>
</html>