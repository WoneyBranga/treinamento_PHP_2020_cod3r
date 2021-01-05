<div class="titulo">Foreach</div>

<?php
$array = [
    1 => 'dom',
    'seg',
    'ter',
    'qua',
    'qui',
    'sex',
    'sab'
];

foreach ($array as $valor) {
    echo "<br>{$valor}";
}
echo "<hr>";
foreach ($array as $indice => $valor) {
    echo "$indice => $valor" . "<br>";
}

$matrix = [
    ['a', 'b', 'c', 'd'],
    ['e', 'f', 'g', 'h']
];

foreach($matrix as $linha) {
    foreach($linha as $letra) {
        echo "$letra";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar){ // INTERESSANTE com & manipulamos ARRAY
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
//Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

echo "<hr>";
$numeros = [1, 2, 3, 4, 5];
foreach($numeros as $dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
