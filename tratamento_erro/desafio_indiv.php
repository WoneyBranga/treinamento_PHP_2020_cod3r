<?php
namespace Blah;
?>
<div class="title">Desafio Indiv</div>

<?php

/* 
Sobrescreva o médodo invid para...
 - lançar uma excessão quando tentar dividir por zero
 - lançar uma excessao quando o resultado não for inteiro
 - Dividir normalmente os demais casos

Os Testes...
 - indiv com os parametros 8 e 2 [Sucesso]
 - indiv com os parametros 8 e 3 [Excessao]
 - indiv com os parametros 8 e 0 [Excessao]
 - indiv "original" com os parametros 8 e 3 [Sucesso]
 */


class IntdivException extends \Exception
{

    function __construct($message, $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

function intdiv($a, $b)
{
    if ($b == 0) {
        throw new IntdivException("Divisão por ZERO!!!");
        //throw new \DivisionByZeroError();
        
    }
    if ($a % $b) {
        throw new IntdivException("Resultado Não inteiro!!!");
    }
    return $a / $b;
}

try {
    //echo intdiv(8,2);
    //echo intdiv(8,3);
    echo intdiv(8,0);
    //echo \intdiv(8, 3);
} catch (IntdivException $e) {
    echo "Temos Erro Personalizado aqui> {$e->getMessage()}";
}
echo "Fim";
