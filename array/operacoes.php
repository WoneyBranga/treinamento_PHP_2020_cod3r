<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "jose",
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dados2['end'] = "Rua A";

// Itessante q com a soma, quando temos a mesma chave, 
// mantem-se o primeiro valor, no caso acima José!
$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo "<br>" . is_array($dadosCompletos);
echo "<br>" . count($dadosCompletos);

echo "<br>";
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";
echo "<br>";
echo "{$dadosCompletos['idade']}";
echo "${dadosCompletos['idade']}";

unset($dadosCompletos['nome']);
echo "<br>";
print_r($dadosCompletos);


unset($dadosCompletos);
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares; // nao faz merge correto...

print_r($decimais);

$decimais = array_merge($pares, $impares);
echo "<br>";
sort($decimais);
print_r($decimais);







