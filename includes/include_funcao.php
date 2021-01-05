<div class="titulo">Include Função</div>

<?php

echo 'carregando: include_funcao<br>';

function carregaArquivo()
{
    include('include_arquivo.php');
    echo $variavel . '<br>';
    echo soma(2, 5) . '<br>';
}

echo 'Novamente no arquivo include_funcao<br>';

carregaArquivo();
echo soma(1, 8) . "!<br>";
echo "Variavel = '{$variavel}'";
var_dump($variavel);