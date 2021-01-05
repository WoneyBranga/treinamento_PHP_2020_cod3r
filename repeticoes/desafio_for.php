<div class="titulo">Desafio For</div>

<!--
    usar for para imprimir:
    #
    ##
    ###
    ####
    #####
    1) pode usar incremento $i++
    2) NAO pode usar incremento $i++
-->


<?php

for ($i = 1; $i <= 5; $i++) {
    echo str_repeat("#", $i), "<br>";
}

echo "<hr>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "#";
    }
    echo "<br>";
}
echo "<hr>";
for ($n = '#'; $n != '######'; $n .= '#') {
    echo "$n<br>";
}
echo "<hr>";