<?php

$nombre_imp = "Laura";
$edad_imp = rand(15, 40);
$sueldo = rand(800, 2000);
echo "$nombre_imp (Edad: $edad_imp, Sueldo: $sueldo): ";
echo ($edad_imp > 16 && $sueldo > 1000) ? "Paga impuestos<br><br>" : "No paga impuestos<br><br>";

?>