<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);
var_dump(PHP_INT_MAX +1);

echo "<br>";
var_dump(1+1.1); // float
echo "<br>";
var_dump((float) 3); // float 
echo "<br>";
var_dump((int) 2.8);  // 2 # perdemos decimal!
var_dump((int) round(2.8));
var_dump(round(2.8));  // arredonda para 3 mas mantem float
echo "<br>";
var_dump(intval(2.8, 10)); // 2 # perdemos decimal!
var_dump(intval('110101011101', 2));
echo "<br>";

// operações com string
echo "<p>String</p>";
var_dump(3 + '2'); // 5
echo "<br>";
var_dump('3' + 2); // 5
echo "<br>";
var_dump('3' . 2); // str 32
echo "<br>", is_string('3' . 2); // false
echo "<br>", is_string('3' + 2); // true

echo "<br>";
var_dump(1+'cinco'); // 1
echo "<br>";
var_dump(1 + ' 5 cinco'); // 6 e ignora texto
echo "<br>";
var_dump(1+"3.2"); // float 4.2
echo "<br>";
var_dump(1+"-3.2e2"); // float -319
echo "<br>";
var_dump((int) "10.5"); // 10
echo "<br>";
var_dump((float) "10.5"); // float 10.5
echo "<br>";