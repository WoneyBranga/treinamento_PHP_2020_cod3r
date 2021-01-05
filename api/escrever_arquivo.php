<div class="titulo">Escrever Arquivo</div>

<?php

$arquivo = fopen('texte.txt', 'w');

fwrite($arquivo, "Valor inicial\n");
$str = "Segunda Linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo Conteudo\n");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "com novos valores\n");
fwrite($arquivo, "adicionados novos valores\n");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'x'); // x para garantir que criarah novo arquivo
fwrite($arquivo, "Arquivo Novo\n");
fclose($arquivo);