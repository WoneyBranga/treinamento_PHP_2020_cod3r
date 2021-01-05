<div class="titulo">Laço For</div>

<?php
for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}
echo "<hr>";
for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}
echo "<hr>";
for (; $cont <= 15;) {
    echo "$cont <br>";
    $cont++;
}

$array = [
    'dom',
    'seg',
    'ter',
    'qua',
    'qui',
    'sex',
    'sab'
];
print_r($array);
echo "<hr>";
for ($i = 0; $i < count($array); $i++) {
    echo "<br>{$array[$i]}";
}

$matrix = [
    ['a', 'b', 'c', 'd'],
    ['e', 'f', 'g', 'h']
];
echo "<hr>";
for($i=0;$i<count($matrix);$i++){
    for($j=0;$j<count($matrix[$i]);$j++){
        echo "{$matrix[$i][$j]}";
    }
    echo "<br>";
}