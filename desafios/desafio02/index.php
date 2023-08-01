<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>Gerando um número aleatório</h1>
    </header>
    <main>
        <?php 

        //mt_rand()-Mais rapido, moderno e confiavel que somente o rand()
        //A PARTIR DA VERSÃO 7.1 ATE O RAND USA AA FUNÇÃO DO MT_RAND
        //random_int() gera numeros aleatorios criptograficamente seguros, mas é muito lento
        
        echo "Gerando um número aleatório entre <strong>0</strong> e <strong>100...</strong><br/>";
        echo "O numero escolhido foi ". mt_rand(min:0,max:100);
        ?>
    </main>
    <p><a  class="button" href="javascript:history.go()">Gerar outro numero</a></p>
</body>
</html>