<div class="titulo">Include Require</div>

<?php

echo "Usando include com arquivo inexistente...<br>";
include("arquivo_inexistente.php");
echo "Usando include com arquivo inexistente...<br>";

echo "Usando require com arquivo inexistente...<br>";
require("arquivo_inexistente.php");
echo "Nao achou memso...<br>";


