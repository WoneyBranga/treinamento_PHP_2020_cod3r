<div class="titulo">Métodos mágicos</div>

<?php

class Pessoa2
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo "Construtor Invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "E morreu...<br>";
    }

    function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    function apresentar()
    {
        echo $this . "<br>";
    }

    public function __get($nome)
    {
        echo "Lendo atributo não declarado: {$nome}<br>";
        //return 123;
    }

    public function __set($nome, $valor)
    {
        echo "Alterando atributo não declarado: Nome> '{$nome}' Valor> '{$valor}'<br>";
    }

    public function __call($nome, $arguments)
    {
        echo "Tentando executar método '{$nome}'.";
        echo "<br>, com os parametros: ";
        print_r($arguments);
    }
}

$pessoa = new Pessoa2('Ice', 38);
// $pessoa->apresentar();             // __toString
// echo $pessoa . "<br>";             // __toString
// $pessoa->nome = 'Bergs'; 
// $pessoa->apresentar();             // __toString
//$pessoa->nomeCompleto;              // __get
//$pessoa->batata = 124;              // __set
$pessoa->tomate('cebola', 'polenta'); // __call
$pessoa = null;                       // __destruct
