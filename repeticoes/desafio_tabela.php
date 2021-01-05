<div class="titulo">Desafio Tabela</div>
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
</style>

<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        echo $valor;
    }
    echo "<br>";
}

$tabela = "<table>";
foreach ($matriz as $linha) {
    $tabela .= "<tr>";
    foreach ($linha as $valor) {
        $tabela .= "<td>$valor</td>";
    }
    $tabela .= "</tr>";
}
$tabela .= "</tabela>";
echo $tabela;

echo "<hr>";

$tabela = "<table>";
foreach ($matriz as $k => $linha) {
    $style = ($k % 2 === 0) ? "background-color: lightblue" :"";
    $tabela .= "<tr style='$style'>";
    foreach ($linha as $valor) {
        $tabela .= "<td>$valor</td>";
    }
    $tabela .= "</tr>";
}
$tabela .= "</tabela>";
echo $tabela;



?>