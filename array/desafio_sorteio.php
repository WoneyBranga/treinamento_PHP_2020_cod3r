<div class="titulo">Desafio Sorteio</div>
<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>

<?php
$nomes = [
    "Elza",
    "Rapunzel",
    "Branca de Neve",
    "Cinderela"
];

$index = array_rand($nomes);
echo "<h1 center>{$nomes[$index]}</h1>";