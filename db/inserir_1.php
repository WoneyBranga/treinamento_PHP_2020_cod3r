<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";
$conexao = novaConexao();

//DDL - Data Definition Language
$sql = "INSERT INTO cadastro
(
    nome, 
    nascimento, 
    email, 
    site, 
    filhos, 
    salario
    ) VALUES (
    'Joseh',
    '1999-10-29',
    'Joseh123@email.com',
    'https://Joseh123.sites.com.br',
    0,
    1000
);";

$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso!";
} else {
    echo "Falhou!" . $conexao->error;
}

$conexao->close();
