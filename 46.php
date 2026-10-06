<?php

$a = 1; $b = -5; $c = 6; // x^2 - 5x + 6 = 0
$disc = ($b * $b) - (4 * $a * $c);
if ($disc > 0) {
    echo "Soluciones: " . ((-$b + sqrt($disc))/(2*$a)) . " y " . ((-$b - sqrt($disc))/(2*$a)) . "<br><br>";
} else echo "No hay solución real<br><br>";

?>