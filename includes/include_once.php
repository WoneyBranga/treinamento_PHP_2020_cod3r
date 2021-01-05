<div class="titulo">Include Once</div>

<?php

include 'include_once_arquivo.php';
//require 'include_once_arquivo.php';
echo "variavel = {$variavel}<br>";
$variavel = 'variavel alterada..';
echo "variavel = {$variavel}<br>";

include 'include_once_arquivo.php';
echo "variavel = {$variavel}<br>";
$variavel = 'variavel alterada..';
echo "variavel = {$variavel}<br>";

include_once 'include_once_arquivo.php';
echo "variavel = {$variavel}<br>";

require_once 'include_once_arquivo.php';
echo "variavel = {$variavel}<br>";