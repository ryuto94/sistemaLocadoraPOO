<?php
    $filmes = $_REQUEST['filme']?$_REQUEST['filme']:0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Lista de Filmes</h1>
    <ul>
        <?php if($filme): ?>
            <?php foreach($filme as $filme): ?>
                <li> <?php echo $filme->primeiro_nome; ?> </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li> Não existem atores </li>
        <?php endif; ?>
    </ul>
    
</body>
</html>