<?php

do {
    $numero = rand(1, 100);
    $raiz = sqrt($numero);
    echo "N: $numero, Raíz: $raiz<br>";
} while (floor($raiz) != $raiz); // Se detiene cuando la raíz es exacta (ej: 4, 9, 16)
echo "<br>";

?>