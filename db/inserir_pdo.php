<div class="titulo">Inserir PDO</div>

<?php

require_once "conexao_pdo.php";

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

$conexao = novaConexao();

//print_r(get_class_methods($conexao));

if ($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com ID ${id} realizado com sucesso!";
}else {
    echo $conexao->errorCode()."<br>";
    print_r($conexao->errorInfo());
}
