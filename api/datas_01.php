<div class="titulo">Datas #01</div>

<?php
echo time() . "<br>"; // marco zero eh 01/01/70
echo date('D, d \d\e M \d\e Y H:i A') . "<br>";

echo strftime('%A, %d de %B de %Y', time())."<br>";

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf8');
echo date('D, d \d\e M \d\e Y H:i A') . "<br>"; // nao funciona o setlocale...
echo strftime('%A, %d de %B de %Y', time())."<br>";

$amanha = time() + (60 * 60 * 24);
echo strftime('%A, %d de %B de %Y', $amanha)."<br>";

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana)."<br>";

$dataFixa = mktime(15, 30, 50, 01, 04, 2021);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa)."<br>";