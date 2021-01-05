<div class="titulo">Básico Sessão</div>

<?php
session_start();

print_r($_SESSION);

echo "<br>";

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'ice';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'ice@ice.com';
}

print_r($_SESSION);
?>

<p>
    <a href="./basico_sessao_alterar.php">Alterar Sessão</a>
</p>