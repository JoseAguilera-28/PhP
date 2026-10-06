<?php

$numeros = [rand(1,50), rand(1,50), rand(1,50)];
$originales = $numeros;
sort($numeros);
echo "Números: " . implode(", ", $numeros) . "<br>";
echo ($originales === $numeros) ? "Se generaron en orden<br><br>" : "No se generaron en orden<br><br>";

?>