<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, 
// qual o método que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc');
echo "<br>";

echo stripos('!AbcaBcabc', 'abc');

echo "<br>";


echo stripos(strtolower('!AbcaBcabc'), strtolower('ABC'));
