<div class="titulo">Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se dois forem executados -> TV 50 e Sorvete
    - Se apenas um for executado -> TV 32 e Sorvete
    - se nenhum  for executado -> fica em casa mais saudável
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<style>
    button,
    select {
        font-size: 1.8rem;
    }
</style>


<?php

if(!isset($_POST['t1']) && !isset($_POST['t2'])) {
    exit;
}

$t1 = !!$_POST['t1'];
$t2 = !!$_POST['t2'];

/* Modo 1 */
if($t1 xor $t2) {
    echo "TV 32 + Sorvete :-D";
}

if($t1 && $t2) {
    echo "TV 50 + Sorvete! \o/";
}

if(!$t1 && !$t2) {
    echo "Nada de Sorvete!  :-/";
}



/* Modo 2 */
if ($t1) {
    if ($t2) {
        echo "TV 50 + Sorvete! \o/";
    } else {
        echo "TV 32 + Sorvete :-D";
    }
} else {
    if ($t2) {
        echo "TV 32 + Sorvete :-D";
    } else {
        echo "Nada de Sorvete!  :-/";
    }
}
