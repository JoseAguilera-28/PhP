<?php

$nif = 12345678;
$letras = "TRWAGMYFPDXBNJZSQVHLCKE";
$letra = $letras[$nif % 23];
echo "NIF completo: $nif$letra<br><br>";

?>