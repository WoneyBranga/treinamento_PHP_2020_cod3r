<div class="titulo">Interface</div>

<?php

interface Animal
{
    function respirar();
}

interface Mamifero
{
    function mamar();
}

interface Canino extends Animal, Mamifero
{
    function latir(): string;
}

interface Felino
{
    function correr();
}

class Cachorro implements Canino
{
    function respirar()
    {
        echo "Irei usar Oxigênio<br>";
    }

    function latir(): string
    {
        return "au au";
    }

    function mamar()
    {
        return "irei usar leite!";
    }

    function correr()
    {
        return "Vruuuummm...";
    }
}

$animal = new Cachorro;
$animal->respirar();
echo $animal->latir(), "<br>";
echo $animal->mamar(), "<br>";

var_dump($animal);
echo "<br>";
var_dump($animal instanceof Animal);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Felino);
echo "<br>";
echo "fim";

//interface possui metodos públicos somente!