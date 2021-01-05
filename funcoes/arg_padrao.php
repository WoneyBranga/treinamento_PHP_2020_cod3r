<div class="titulo">Argumento Padrão</div>


<?php

function saudacao($nome = 'senhor', $sobrenome='Cliente') {
    echo "Bem Vindo, $nome $sobrenome!<br>";
}

saudacao();
saudacao(null);
saudacao(null, null);
saudacao('ice', 'bergs');

function anotarPedido($comida, $bebida = 'agua') {
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}

anotarPedido('burger');
anotarPedido('pizza', 'refri');

//bad...
function anotarPedido2($bebida = 'agua', $comida) {
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}