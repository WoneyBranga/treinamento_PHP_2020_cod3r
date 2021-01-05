<div class="titulo">Classes</div>

<?php

class Data
{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar()
    {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$d1 = new Data;
echo $d1->apresentar() . "<br>";

$aniversario = new Data;
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2014;
echo $aniversario->apresentar() . "<br>";

$casamento = new Data();
$casamento->dia = 31;
$casamento->mes = 10;
$casamento->ano = 2009;
echo $casamento->apresentar() . "<br>";
