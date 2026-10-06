<?php

$C = 1000000; $R = 4; $N = 20;
for ($i = 1; $i <= $N; $i++) {
    $interes_anual = ($C * $R) / 100;
    $C += $interes_anual;
    echo "Año $i: Total acumulado = " . number_format($C, 2) . "€<br>";
}
echo "<br>";

?>