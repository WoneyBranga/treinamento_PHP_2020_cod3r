<div class="titulo">Desafio Erros</div>

<?php

interface Template
{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template
{
    public function metodo3()
    {
        echo "estou funcionando";
    }
}

class Classe extends ClasseAbstrata
{
    function metodo1()
    {
        echo "chamou metodo1<br>";
    }

    function metodo2($parametro)
    {
        echo "chamou metodo2 com parametro {$parametro}<br>";
    }

    function __construct($parametro)
    {
    }
}

$exemplo = new Classe("param");
$exemplo->metodo3();
