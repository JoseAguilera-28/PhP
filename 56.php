<?php

$maximo = null;
$minimo = null;
$iteraciones = 0;

while (true) {
    $numero = rand(-100, 100);
    $iteraciones++;

    if ($numero === 0) {
        break;
    }
    
    if ($maximo === null || $numero > $maximo) {
        $maximo = $numero;
    }
    
    if ($minimo === null || $numero < $minimo) {
        $minimo = $numero;
    }
}

printf("El número máximo generado es: %d<br>", $maximo);
printf("El número mínimo generado es: %d<br>", $minimo);
printf("Número de iteraciones: %d<br>", $iteraciones);

?>

