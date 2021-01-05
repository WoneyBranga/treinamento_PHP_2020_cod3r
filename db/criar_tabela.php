<div class="titulo">Criar Tabela</div>

<?php

require_once "conexao.php";
$conexao = novaConexao();

//DDL - Data Definition Language
$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT unsigned auto_increment primary key,
    nome varchar(100) not null, 
    nascimento DATE,
    email varchar(100) not null, 
    site varchar(100), 
    filhos INT, 
    salario FLOAT
);";

$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso!";
} else {
    echo "Falhou!" . $conexao->error;
}

$conexao->close();
