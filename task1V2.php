<?php

$n = (int)readline('Введите целое число: ');


$s = (string) abs((int) $n);
$reversed = '';

for ($i = strlen($s) - 1; $i >= 0; $i--) {
    $reversed .= $s[$i];
}

if ($s === $reversed) {
    echo "Число $n — палиндром.\n";
} else {
    echo "Число $n — не палиндром.\n";
}
