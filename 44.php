<?php

$n1 = 220; $n2 = 284;
$sum1 = 0; $sum2 = 0;
for ($i=1; $i<$n1; $i++) { if ($n1 % $i == 0) $sum1 += $i; }
for ($i=1; $i<$n2; $i++) { if ($n2 % $i == 0) $sum2 += $i; }
echo ($sum1 == $n2 && $sum2 == $n1) ? "Son amigos<br><br>" : "No son amigos<br><br>";

?>