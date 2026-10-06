<?php

for ($i = 0; $i < 15; $i++) {
    $ran = rand(1, 100);
    if ($ran % 2 == 0) echo "$ran divisible por 2. ";
    elseif ($ran % 3 == 0) echo "$ran divisible por 3. ";
    else echo "$ran no divisible por ninguno. ";
}
echo "<br><br>";

?>