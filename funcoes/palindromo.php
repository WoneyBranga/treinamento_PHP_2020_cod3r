<div class="titulo">Desafio Palindromo</div>


<?php

$palavras = [
    "ana",
    "arara",
    "bola",
    "ama"
];

function palindromoCheck($palavra)
{
    for ($i = 0; $i < mb_strlen($palavra); $i++) {
        if ((mb_substr($palavra, $i, 1) ==
            mb_substr($palavra, mb_strlen($palavra) - $i - 1, 1))) {
            echo "ok";
        } else {
            echo "X";
        }
    }
}

palindromoCheck('amora');
echo "<br>";
function palindromo($palavra)
{
    $ultimoIndice = strlen($palavra) - 1;
    for ($i = 0; $i <= $ultimoIndice; $i++) {
        if ($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return "Não";
        }
    }
    return "Sim";
}

echo palindromo('amora');
echo "<br>";
function palindromoSimples($palavra)
{
    return $palavra === strrev($palavra) ? "Sim" : "Não";
}
echo palindromoSimples('arara');

