<?php

namespace contexto;
?>

<div class="title">Exemplo Basico</div>

<?php
echo __NAMESPACE__ . '<br>';

const constante1 = 123;

define('contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);
define('outrocontexto\constante4', 456);
echo constante1 . '<br>';
echo constante2 . '<br>';
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
echo \outrocontexto\constante4 . '<br>';

function soma($a, $b)
{
    return $a + $b;
}

echo \contexto\soma(1,3).'<br>';
echo soma(1,3).'<br>';

function strpos($str, $text)
{
    echo "Buscando o texto '{$text}' em '{$str}'<br>";
    return 1;
}

echo strpos("Texto genérico para busca", "busca"),"<br>";
echo \strpos("Texto genérico para busca", "busca"), "<br>";