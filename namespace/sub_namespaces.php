<?php
namespace App;
?>

<div class="title">Sub Namespaces</div>

<?php
echo __NAMESPACE__."<br>";
const constante = 123;

namespace App\Princical;
echo __NAMESPACE__."<br>";
const constante = 234;

namespace App\Princical\Especifico;

use const contexto\constante1;

echo __NAMESPACE__."<br>";
const constante = 345;

echo constante."<br>";
echo constant("\\".__NAMESPACE__."\constante"). "<br>";
echo \App\constante."<br>";
echo \App\Princical\constante."<br>";
echo \App\Princical\Especifico\constante."<br>";