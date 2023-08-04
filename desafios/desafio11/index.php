<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preço = $_GET['preco'] ?? '0';
        $porc = $_GET['porc'] ?? '0';
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="preco"> Preço do produto(R$)</label>
        <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preço?>">

        <label for="porc">Qual será o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label>
        <input type="range" name="porc" id="porc" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$preço?>">
        <input type="submit" value="Reajustar">   
        </form>
    </main>
        <?php 
            $aumento = $preço * $porc / 100;
            $novo = $preço + $aumento;
        ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preço, 2, ",",".")?> com <strong><?=$porc?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novo, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>
        <script>
            mudaValor()
            function mudaValor() {
                p.innerText = porc.value;
            }
        </script>
</body>
</html>