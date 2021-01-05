<div class="titulo">IF ELSE</div>

<?php

if (true) {
    echo "serei impresso?<br>";
    echo "serei impresso novamente?<br>";
}


if (true) {
    echo "verdadeiro - A<br>";
    echo "verdadeiro - B<br>";
} else {
    echo "falso - A<br>";
    echo "falso - B<br>";
}

if (false) {
    echo "passo - A<br>";
}else if (true) {
    echo "passo - B<br>";
}elseif (false) {
    echo "passo - C<br>";
} else {
    echo "passo - D<br>";
}

echo "fim<br>";
