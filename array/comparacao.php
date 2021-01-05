<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'maria', 'idade' => 20];
$arr2 = ['nome' => 'maria', 'idade' => 20];

var_dump( $arr1 == $arr2);  // true
var_dump( $arr1 === $arr2); // true

echo '<br>';
$arr3 = ['idade' => 20, 'nome' => 'maria'];
var_dump( $arr1 == $arr3);  // true
var_dump( $arr1 === $arr3); // false
var_dump( $arr1 != $arr3);  // false
var_dump( $arr1 !== $arr3); // true

echo '<br>';
$arr4 = ['idade' => '20', 'nome' => 'maria'];
var_dump( $arr1 == $arr4);  // true
var_dump( $arr1 === $arr4); // false

