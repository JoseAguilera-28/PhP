<?php

for ($i = 0; $i < 10; $i++) {
    $temp = rand(-50, 150);
    if ($temp <= 0) echo "$temp: Hielo<br>";
    elseif ($temp < 100) echo "$temp: Agua<br>";
    else echo "$temp: Vapor<br>";
}

?>