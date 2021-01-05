<div class="titulo">Multidimensionais</div>
<pre>
<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "Naturalidade" => "Sao Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "Naturalidade" => "Bahia"
    ]
];

print_r($dados);

echo "<br>" . $dados[0]['idade'];
echo "<br>" . $dados[1]['idade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];
echo "<br>";
print_r($dados);
echo "<br>" . $dados[2]['idade'];

$dados[2]['vizinho'] = "chaves";
echo "<br>";
print_r($dados[2]);

unset($dados[1]); // quando removida posicao, php nao reordena...
echo "<br>";
print_r($dados);