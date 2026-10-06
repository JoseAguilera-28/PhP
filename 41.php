<?php

$A = rand(-5, 5); $B = rand(-5, 5);
echo "Ecuación y = {$A}x + $B<br>";
for ($x = 1; $x <= 5; $x++) echo "Si x=$x, y=" . (($A * $x) + $B) . "<br>";
echo "<br>";

?>