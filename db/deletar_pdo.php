<div class="titulo">Deletar PDO</div>
<pre>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();

$sql = "DELETE FROM cadastro WHERE id = :id;";
$stmt = $conexao->prepare($sql);

if ($stmt->execute([':id' => 21])) {
    echo "Deletado com Sucesso";
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao = null;
