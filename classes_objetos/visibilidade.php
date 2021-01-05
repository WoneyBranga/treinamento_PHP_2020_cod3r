<div class="titulo">Visibilidade</div>

<?php


class A
{
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostarA()
    {
        $this->naoMostrar();
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca()
    {
        echo "Serei transmitido por Herança!<br>";
    }

    private function naoMostrar()
    {
        echo "Nao vou Imprimir!<br>";
    }
}

$a = new A;
$a->mostarA();
//$a->naoMostrar();

class B extends A
{
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        //echo "Class B) Privado = {$this->privado}<br>";
        parent::vaiPorHeranca();
    }
}


$b = new B;
$b->mostrarB();
//$b->naoMostrar();
//$b->vaiPorHeranca();


