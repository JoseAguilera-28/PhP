<?php

$edad_random = rand(0, 90);
echo "Edad generada ($edad_random): ";
if ($edad_random <= 3) echo "Infancia<br><br>";
elseif ($edad_random <= 11) echo "Infantil<br><br>";
elseif ($edad_random <= 20) echo "Adolescente<br><br>";
elseif ($edad_random <= 65) echo "Adulto<br><br>";
else echo "Tercera edad<br><br>";

?>