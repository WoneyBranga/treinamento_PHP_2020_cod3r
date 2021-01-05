<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens()
{
    echo "Olá!";
    echo "Ateh a proxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$var1 = 1;

function trocaValor()
{
    $var1 = 2;
    echo "durante a funcao $var1<br>";
}

echo "antes: $var1<br>";
trocaValor();
echo "Depois: $var1<br>";

function trocaValorDeVerdade()
{
    global $var1;
    $var1 = 3;
    echo "durante a funcao $var1<br>";
}

echo "antes: $var1<br>";
trocaValorDeVerdade();
echo "Depois: $var1<br>";