<div class="titulo">Consultar Registros</div>
<pre>
<?php

require_once "conexao.php";
$conexao = novaConexao();

$sql = "SELECT * FROM cadastro;";

$resultado = $conexao->query($sql);

$registros = [];

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Falhou!" . $conexao->error;
} else {
    echo "Sem Dados";
}

#print_r($registros);

if ($resultado) {
    echo "Sucesso!";
} else {
    echo "Falhou!" . $conexao->error;
}

$conexao->close();

?>

<table class="table">
<thead>
<th>Id</th>
<th>Nome</th>
<th>Nascimento</th>
<th>Email</th>
</thead>
<tbody>
<?php foreach ($registros as $registro) : ?>
<tr>
    <td><?= $registro['id'] ?></td>
    <td><?= $registro['nome'] ?></td>
    <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
    <td><?= $registro['email'] ?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<style>
table > * {
    font-size: 1.2rem;
}
</style>