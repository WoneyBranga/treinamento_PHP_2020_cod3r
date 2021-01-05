<div class="titulo">Desafio Modulo</div>

<?php

require_once __DIR__.'/usuario.php';

$usuario = new Usuario('Gustavo Mendonça', 21, 'gus_mend');
$usuario->apresentar();

unset($usuario);