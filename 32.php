<?php

$tabla = rand(1, 10);
echo "Tabla del $tabla:<br>";
for ($i = 1; $i <= 10; $i++) echo "$tabla x $i = " . ($tabla * $i) . "<br>";
echo "<br>";

?>