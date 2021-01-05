<?php
session_start();

if ($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if (!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="recursos/cs/estilo.css">
    <link rel="stylesheet" href="recursos/cs/exercicio.css">
    <title>Curso PHP</title>
</head>

<body class="exercicio">

    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuario: <?= $_SESSION['usuario']; ?></span>
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php"; ?> class="verde">Sem Formatação</a>
        <a href="index.php">Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS - <?= date('Y'); ?>
    </footer>


</body>

</html>