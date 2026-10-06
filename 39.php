<?php

$suma_cuad = 0; $impares = 0; $iteraciones = 0;
while ($iteraciones < 100 && $suma_cuad <= 11000) {
    $random_val = rand(1, 20);
    $suma_cuad += ($random_val * $random_val);
    if ($random_val % 2 != 0) $impares++;
    $iteraciones++;
    if ($suma_cuad > 10000 && $suma_cuad < 11000) break;
}
echo "Suma de cuadrados: $suma_cuad, Impares: $impares<br><br>";

?>