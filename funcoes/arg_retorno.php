<div class="titulo">Argumentos & Retorno</div>

<?php

function obterMensagem()
{
    return "Seja bem vindo!";
}

obterMensagem();

$m = obterMensagem();
echo $m;
echo "<br>", obterMensagem();
echo "<br>";
var_dump(obterMensagem());


function obterMensagemComNome($nome)
{
    return "Bem Vindo '$nome'!";
}

echo "<br>", obterMensagemComNome('Ice');
echo "<br>", obterMensagemComNome('Bergs');

function soma($a, $b)
{
    return $a + $b;
}

$x = 4;
$y = 5;
echo "<br>" . soma(6, 7);
echo "<br>" . soma($x, $y);

function trocaValor($a, $novoValor)
{
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 4);
echo "<br>" . $variavel;


function trocaValorDeVerdade(&$a, $novoValor)
{
    $a = $novoValor;
}
$variavel = 1;
trocaValorDeVerdade($variavel, 4);
echo "<br>" . $variavel;
