<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b)
{
    return $a + $b;
}

echo soma(4, 5) . "<br>";
echo soma(14, 15,6,7,8,9) . "<br>";


function somaCompleta(...$numeros) {
    $soma= 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1,2,3,4);

$array = [6,7,8];

echo "<br>".somaCompleta(...$array);
echo "<br>";

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

membros("ice", 'bergs', 'neno', 'none');
membros("null");
membros("ice", ...[11,22,33]);