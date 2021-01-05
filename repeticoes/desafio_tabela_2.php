<div class="titulo">Desafio Tabela2</div>
<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
    form * {
        font-size: 1.8rem;
    }
    form > div {
        margin-bottom: 10px;
    }
</style>

<form action="#" method="post">
    <label for="linhas">Linhas</label>
    <input type="number" name="linhas" value=<?= $_POST['linhas'] ?? 10 ?>>
    <label for="colunas">Colunas</label>
    <input type="number" name="colunas" value=<?= $_POST['colunas'] ?? 10 ?>>
    <button>Gerar</button>
</form>

<?php
echo "<hr>";
if(!isset($_POST['linhas'])) {
    echo "Informe Valores!";
    exit;
}

$linhas = intval($_POST['linhas']);
$colunas = intval($_POST['colunas']);
echo "Montando tabela de $linhas linhas e $colunas colunas";
echo "<hr>";

$tabela = "<table>";
$valor = 1;

for($lin = 1;$lin <= $linhas;$lin++){
    $style = ($lin % 2 === 0) ? "background-color: lightblue" :"";
    $tabela .= "<tr style='$style'>";
    for($col=1;$col<= $colunas;$col++){
        $tabela .= "<td>$valor</td>";
        $valor++;
    }
}
echo $tabela;
