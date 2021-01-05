<div class="titulo">Excluir Registro #02</div>

<?php

require_once "conexao.php";
$conexao = novaConexao();
$registros = [];

if(isset($_GET['excluir'])) {
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?;";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param('i', $_GET['excluir']);
    $stmt->execute();
}

$sql = "SELECT * FROM cadastro;";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->connect_error) {
    echo "Erro: " . $conexao->error;
}
$conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><a href="/estudos/udemy_php7/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>