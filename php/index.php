<?php include("funcoes.php")?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/View/reset.css">
    <link rel="stylesheet" href="/View/style.css">

    <?= estilizar_exercicio() ?>

    <title>Estudo PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>PHP</h1>
        
        <?= criacao_subtitulo() ?>
        
        <?= voltar() ?>

    </header>

    <main class="principal">
        <div class="conteudo">
            <?php adicionador_conteudo() ?>
        </div>
    </main>
    <footer class="rodape">
        CÓDIGO OVERFLOW © <?= date('Y'); ?>
    </footer>
</body>

</html>

