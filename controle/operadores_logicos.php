<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo "<br>";
var_dump(!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND'(E)</p><hr>";
var_dump(true && true);    // true
var_dump(true && false);   // false
var_dump(false && true);   // false
var_dump(false && false);  // false
var_dump(true and true);    // true
var_dump(true and false);   // false
var_dump(false and true);   // false
var_dump(false and false);  // false

echo "<p class='divisao'>Tabela Verdade 'OR'(OU)</p><hr>";
var_dump(true || true);    // true
var_dump(true || false);   // true
var_dump(false || true);   // true
var_dump(false || false);  // false
var_dump(true or true);    // true
var_dump(true or false);   // true
var_dump(false or true);   // true
var_dump(false or false);  // false

echo "<p class='divisao'>Tabela Verdade 'XOR'(OU Exclusivo)</p><hr>";
var_dump(true xor true);   // false
var_dump(true xor false);  // true
var_dump(false xor true);  // true
var_dump(false xor false); // false
var_dump(true != true);    // false
var_dump(true != false);   // true
var_dump(false != true);   // true
var_dump(false != false);  // false


echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 67;
$sexo  = "M";

$pagouPrevidencia = true;
$criterioHomem = ($idade >=65 && $sexo === 'M');
$criterioMulher = ($idade >=60 && $sexo === 'F');
$atingiuCreterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCreterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";


var_dump($podeSeAposentar);

if ($idade >= 60 && $sexo === "F") {
    echo "Pode Se Aposentar -> '{$sexo}'";
} elseif ($idade >= 65 && $sexo === "M") {
    echo "Pode Se Aposentar -> '{$sexo}'";
} else {
    echo "Vai Ter que trabalhar mais um pouco!";
}
