<div class="titulo">Valor vs Referência</div>

<?php

$varivavel =  'valor inicial';
echo $varivavel;

// atribuição por valor;
$varivavelValor = $varivavel;
echo "<br>$varivavelValor";
$varivavelValor = 'novo valor';
echo "<br>$varivavel";
echo "<br>$varivavelValor";

// atribuição por referencia;
$variavelReferencia = &$varivavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$varivavel $variavelReferencia";
