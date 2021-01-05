<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, "<br>";
var_dump($numeroA);
echo "<br>";

$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo "<br>";
echo isset($somaDosNumeros);

unset($somaDosNumeros);

echo "<br>";
var_dump($somaDosNumeros);

$variavel = 10;
echo "<br>", $variavel;

$variavel = "Agora sou uma string";
echo "<br>", $variavel;

// Nomes de variável
$var     = 'valido';
$var2    = 'valido';
$VAR3    = 'valido';
$_var_4  = 'valido';
$vár5    = 'valido';   //mas nada recomendado...
//$6var  = 'invalido';
//$%var7 = 'invalido';
//$var8% = 'invalido';

echo "<br>";

var_dump($_SERVER['HTTP_HOST']);















