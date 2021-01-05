<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo "<br>";
echo FALSE;
echo "<br>".var_dump(true);
echo "<br>".var_dump(False);
echo "<br>".var_dump('false');
echo "<br>" . is_bool(false);
echo "<br>" . is_bool('true');

echo "<p>Regras:</p>";
echo "<br>" . var_dump((bool) 0);    // false
echo "<br>" . var_dump((bool) 0.0);  // false
echo "<br>" . var_dump((bool) "0");  // false
echo "<br>" . var_dump((bool) '');   // false

echo "<br>" . var_dump((bool) "00");    // true
echo "<br>" . var_dump((bool) 0.000000000001);     // true
echo "<br>" . var_dump((bool) 20);      // true
echo "<br>" . var_dump((bool) -1);      // true
echo "<br>" . var_dump((bool) ' ');     // true
echo "<br>" . var_dump((bool) 'blah');  // true

echo "<br>" . var_dump(!!'blah');  // true
echo "<br>" . var_dump(!!0);       // false
