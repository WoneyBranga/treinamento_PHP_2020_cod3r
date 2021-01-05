<div class="titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;

do {
    echo "do-while $contador<br>";
    $contador++;
} while ($contador < VALOR_LIMITE);

echo "<hr>";

$contador = 0;
while ($contador < VALOR_LIMITE) {
    echo "0while $contador<br>";
    $contador++;
}

$contador = 0;
while (true) {
    echo "1while $contador<br>";
    $contador++;
    if ($contador >= VALOR_LIMITE) break;
}
