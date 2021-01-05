<div class="titulo">Tipo String</div>

<?php
echo "eu sou uma string";
echo "<br>";
var_dump("eu também"); // contou 10 pelo acento...
echo "<br>";

// concatenação
echo "nós também" . ' somos';
echo '<br>', "Também aceito", " vírgulas";
echo "<br>";
echo '"teste"' ,' ' ,"'teste'" . ' ' . '\'teste\'' . '\\' ;

print("<br>Também existe a função print");
print "<br>Também existe a função print";

//algumas funções
echo "<br>" . strtoupper('caixaalta');
echo "<br>" . strtolower('CAIXABAIXA');
echo "<br>" . ucfirst("só a primeira letra");
echo "<br>" . ucwords("todas as palavras");

echo "<br>" . strlen("Quantas Letras?");
echo "<br>" . strlen("eu também"); // calcula ERRADO mesmo com acentos!
echo "<br>" . mb_strlen("eu também"); // calcula correto mesmo com acentos!
echo "<br>" . mb_strlen("eu também", 'utf-8'); // calcula correto mesmo com acentos!

echo "<br>" . '"'.substr("Só uma parte mesmo", 7, 6).'"';
echo "<br>" . '"'.mb_substr("Só uma parte mesmo", 7, 6).'"';
echo "<br>" . '"'.substr("So uma parte mesmo", 7, 6).'"';

echo "<br>" . str_replace("isso", "aquilo", "Trocar isso isso");

