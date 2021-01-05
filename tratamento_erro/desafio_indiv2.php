<div class="title">Desafio Indiv Solucao #2</div>

<?php
require_once "desafio_indiv2_apoio.php";

use function Aritmetica\intdiv;

try {
    echo intdiv(8,3)."<br>";
} catch (\Aritmetica\NaoInteiroException $e) {
    echo "Resultado não é um inteiro!<br>";
}

try {
    echo intdiv(8,0)."<br>";
} catch (DivisionByZeroError $e) {
    echo "Divisão por ZERO!<br>";
}

echo intdiv(8,2)."<br>";
echo \intdiv(8,2)."<br>";
echo \intdiv(8,3)."<br>";