<?php

$MAX = 19;
$MIN = 1;
$numero_aleatorio = rand($MIN, $MAX);
for ($i = 1; $i <= $numero_aleatorio; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " " ;
    }
    echo "<br>";
}

?>