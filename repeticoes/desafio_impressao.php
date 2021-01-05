<div class="titulo">Desafio Impressão</div>

<!--
    Enunciado:
    - imprima apenas os valores do array qye contem indice par;
    - Desafio adicional: resolver com for e foreach
    - valores esperados: AAA, CCC, EEE;
-->

<?php
$array = [
    'AAA',
    'BBB',
    'CCC',
    'DDD',
    'EEE',
    'FFF'
];

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 === 1) continue;
    echo "$array[$i]<br>";
}
echo "<hr>";
foreach ($array as $k => $v) {
    if ($k % 2 === 1) continue;
    echo "$v<br>";
}
