<div class="titulo">Retornando Função</div>


<?php

function soma($a) {
    return function($b) use ($a) {
        echo "a: $a b: $b"."<br>";
        return $a + $b;
    };
}

echo soma(3)(4)."<br>";

$doisMais = soma(2);
echo "<br>".$doisMais(10);
echo "<br>".$doisMais(18);