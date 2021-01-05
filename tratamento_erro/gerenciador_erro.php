<div class="title">Error Handler</div>

<?php

// echo 4/0 . "<br>";

error_reporting(E_ERROR);
//echo 4/0 . "<br>";

error_reporting(E_ALL);
//echo 4/0 . "<br>";
error_reporting(~E_ALL); // inverso
echo 4 / 0 . "<br>";

echo "<hr>";

error_reporting(E_ALL);
echo 4 / 0 . "<br>";

include 'arqInvalido.php';

function filtraMensagem($errno, $errstring)
{
    $text = 'include';
    //$text = 'by zero';
    return !!strpos(" $errstring]", $text);
}

set_error_handler('filtraMensagem', E_WARNING);

echo "<hr>";
echo 4 / 0 . "<br>";
include 'arqInvalido.php';

restore_error_handler();
echo "<hr>";
echo 4 / 0 . "<br>";
include 'arqInvalido.php';