<div class="titulo">Consultar PDO</div>
<pre>

<?php
require_once "conexao_pdo.php";

$sql = "SELECT * FROM cadastro;";

$conexao = novaConexao();

#$resultado = $conexao->query($sql)->fetchAll();
#$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_BOTH);
#$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
#$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_NUM);
#$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_OBJ);
#$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_CLASS);

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio ;";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 1, PDO::PARAM_INT);

if ($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

#$sql = "SELECT * FROM cadastro WHERE id = ?;";
$sql = "SELECT * FROM cadastro WHERE id = :id;";
$stmt = $conexao->prepare($sql);

//if ($stmt->execute([16])) {
if ($stmt->execute([':id' => 20])) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}



#$conexao->close(); // nao funcionando...
$conexao = null;
