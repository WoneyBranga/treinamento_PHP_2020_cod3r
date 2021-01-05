<div class="titulo">Ler Arquivo</div>

<?php

$arquivo = fopen('teste.txt', 'r');

echo fread($arquivo, 10);
echo "<br>";
echo fread($arquivo, 10);
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo "$tamanho <br>";

echo fread($arquivo, $tamanho);
fclose($arquivo);

echo "<hr>";
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . "<br>";
echo fgets($arquivo) . "<br>";
echo fgets($arquivo) . "<br>";
echo var_dump(fgets($arquivo) . "<br>");
echo var_dump(fgets($arquivo) . "<br>"); // deveria retornar falso mas  mostrando ultima linha sempre
fclose($arquivo);

echo "<hr>";
$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) {
    echo fgets($arquivo), "..<br>";
}
fclose($arquivo);

echo "<hr>";

$arquivo = fopen('teste.txt', 'r');
while (!feof($arquivo)) {
    echo fgetc($arquivo), "..<br>";
}
fclose($arquivo);

echo "<hr>";
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), "<br>";
// neste caso adicionou a segunda linha e matou resto do conteudo CUIDADO!
echo fwrite($arquivo, "Adicionado durante a leitura\n"); 
echo fgets($arquivo), "<br>";
fclose($arquivo);
