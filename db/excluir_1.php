<div class="titulo">Excluir Registro #01</div>

<?php

require_once "conexao.php";
$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id = 3;";

$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso!";
} else {
    echo "Falhou!" . $conexao->error;
}

$conexao->close();
