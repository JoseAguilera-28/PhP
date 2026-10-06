<?php

$dividiendo = 14; $divisor_r = 3;
$cociente_r = 0; $resto_r = $dividiendo;
while ($resto_r >= $divisor_r) {
    $resto_r -= $divisor_r;
    $cociente_r++;
}
echo "14/3 -> Cociente: $cociente_r, Resto: $resto_r<br><br>";

?>