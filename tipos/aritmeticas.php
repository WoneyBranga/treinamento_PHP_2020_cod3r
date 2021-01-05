<div class="titulo">Operações Aritméticas</div>

<?php
echo 1+1, "<br>";
var_dump(1+1);
var_dump(1+1.0);
echo "<br>";
echo 1 + 2.5, "<br>";
echo 10 - 2, "<br>";
echo 2 * 5, "<br>";
echo 7 / 4, "<br>"; // retorna float

echo intdiv(7,4), "<br>"; //trunca decimal
echo 7 % 4, "<br>"; // retorna resto da divisão

echo round(7/4), "<br>";  // arredonda resultado

echo 7 / 0, "<br>"; // tende ao infinito

//echo intdiv(7,0); // gera ERRO php

echo 4 ** 2, "<br>"; // exponenciação

echo "<br>";

// precedencia de operadores;
// () => ** => / * % => + -
echo "<p>Precedência</p>";
echo 2 + 3 * 4, "<br>"; // 14
echo (2 + 3) * 4, "<br>"; // 20
echo 2 + 3 * 4 ** 2, "<br>"; // 50
echo ((2 +3) * 4) ** 2, "<br>"; // 400