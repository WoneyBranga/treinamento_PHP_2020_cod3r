<div class="titulo">Closure & Callable</div>

<?php

$soma1 = function ($a, $b) {
    return $a + $b;
};

echo $soma1(2, 3) . "<br>";
echo is_callable($soma1) ? 'Sim' : 'Não';
echo "<br>";
var_dump($soma1);
echo "<br>";
function soma2($a, $b)
{
    return $a + $b;
}
//$soma2 = 1;
//echo is_callable($soma2) ? 'Sim' : 'Não';
echo "<br>";
function executar($a, $b, $op, callable $funcao)
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}
executar(2, 3, '+', $soma1); // eh closure/callable
executar(2, 3, '+', soma2);  // eh callable
echo "<br>";

function executar2($a, $b, $op, closure $funcao)
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}
executar2(2, 3, '+', $soma1); // eh closure/callable
executar2(2, 3, '+', soma2); //erro pois nao eh closure
