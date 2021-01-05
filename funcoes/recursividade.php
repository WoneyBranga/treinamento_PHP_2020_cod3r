<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero)
{
    $soma = 0;
    for (; $numero >= 1; $numero--) {
        $soma += $numero;
    }
    return $soma;
}
echo somaUmAte(10) . "<br>";

function somaUmAte2($num)
{
    $soma = 0;
    for ($i = 1; $i <= $num; $i++) {
        $soma += $i;
    }
    return $soma;
}
echo somaUmAte2(10) . "<br>";

function somaRecursivaUmAte($numero)
{
    //condição de parada!
    if ($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(10) . "<br>";

function somaRecursivaEconomica($numero)
{
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}
echo somaRecursivaEconomica(10) . "<br>";
