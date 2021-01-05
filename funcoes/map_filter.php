<div class="titulo">Map & Filter</div>


<?php
$notas = [5.8, 7.3, 9.8, 6.7];

$notasFinais1 = [];

foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);
echo "<br>";

/* Exemplo Array_map */
$notasFinais2 = array_map("round", $notas);
print_r($notasFinais2);
echo "<br>";

$apenasAprovados1 = [];
foreach ($notas as $nota) {
    if ($nota > 7) {
        $apenasAprovados1[] = $nota;
    }
}
print_r($apenasAprovados1);
echo "<br>";

/* Exemplo Array_filter */
function aprovados($nota)
{
    return $nota > 7;
}

$apenasAprovados2 = array_filter($notas, "aprovados");
print_r($apenasAprovados2);
echo "<br>";

function calculoLegal($nota)
{
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

/* Exemplo Array_map */
$notasFinais3 = array_map("calculoLegal", $notas);
print_r($notasFinais3);
echo "<br>";