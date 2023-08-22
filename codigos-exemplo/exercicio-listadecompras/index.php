<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>

    <?php $lista_de_compras = ['pão', 'feijão', 'açucar', 'tempero']; ?>
    <h1>Lista de Compras</h1>
    <ul>
        <?php foreach($lista_de_compras as $item):?>
            <li><a href=""><?=$item?></a></li>

        <?php endforeach;?>
    </ul>
    
    
</body>
</html>