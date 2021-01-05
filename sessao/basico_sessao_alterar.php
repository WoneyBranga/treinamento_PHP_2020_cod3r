<?php
session_start();
print_r($_SESSION);

$_SESSION['email'] = "z@z.com";
?>

<p>
    <b>Nome: </b><?= $_SESSION['nome'] ?>
    <br>
    <b>Nome: </b><?= $_SESSION['email'] ?>
</p>


<p>
    <a href="./basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="./basico_sessao_limpar.php">Limpar</a>
</p>