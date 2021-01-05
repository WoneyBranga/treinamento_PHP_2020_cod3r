<div class="titulo">Alterar PDO</div>
<pre>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();

$sql = "UPDATE cadastro SET 
            nome       = ?,
            nascimento = ?,
            email      = ?,
            site       = ?,
            filhos     = ?,
            salario    = ?
        WHERE
            id = ?;";

$stmt = $conexao->prepare($sql);


$resultado = $stmt->execute([
    'ICE',
    '2021-01-05',
    'ICE@ICE.NET',
    'ICE.NET',
    0,
    10000,
    29
]);

if ($resultado) {
    echo "Alterado com Sucesso";
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao = null;
