<?php

// 1. Primero definimos la función correctamente
function sumaDivisores($num) {
    if ($num <= 0) return 0; // Evitamos divisiones por cero
    
    $suma = 0;
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $suma += $i;
        }
    }
    return $suma;
}

$intentos = 0;

// 2. Bucle para generar números aleatorios hasta dar con ellos
while (true) {
    // Reducimos el rango a 2000 para que sea factible encontrarlos rápido
    $numero1 = rand(0, 3000);
    $numero2 = rand(0, 3000);
    $intentos++;

    $suma1 = sumaDivisores($numero1);
    $suma2 = sumaDivisores($numero2);

    // 3. Comprobamos si son amigos. 
    // Añadimos $numero1 !== $numero2 para evitar los "números perfectos" (como el 6 o el 28)
    if ($suma1 === $numero2 && $suma2 === $numero1 && $numero1 !== $numero2) {
        printf("¡Éxito! Después de %d intentos.<br>", $intentos);
        printf("Los números %d y %d son amigos.<br>", $numero1, $numero2);
        break; // Rompemos el bucle infinito
    }
}

?>