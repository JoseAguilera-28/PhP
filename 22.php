<?php

$adultos = 10; $ninos = 5;
$peso_total_kg = ($adultos * 75) + ($ninos * 20);
$limite_kg = 1000 * 0.45359237; // Libras a Kg
echo ($peso_total_kg <= $limite_kg) ? "Pueden subir juntos<br><br>" : "Deben dividirse en dos viajes<br><br>";

?>