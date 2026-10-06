<?php

$n_mult = 3; $m_limite = 15;
echo "Múltiplos de $n_mult menores que $m_limite: ";
for ($i = $n_mult; $i < $m_limite; $i += $n_mult) echo "$i ";
echo "<br><br>";

?>