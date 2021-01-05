<div class="titulo">Arrays Constantes</div>
<pre>

<?php
const FRUTAS = [
    "laranja",
    "abacaxi",
];

//FRUTAS[0] = "banana"; // erro
//FRUTAS[] = "banana"; // erro

echo FRUTAS[0];

const CARROS  = [
    "fiat" => "uno",
    "ford" => "fiesta"
];

echo "<br>" . CARROS['fiat'];

define("CIDADES", ['Belo Horizonte', 'recife']);
echo "<br>" . CIDADES[1];

