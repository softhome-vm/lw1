<?php

$x = (float)readline('Введите координату x: ');

$y = (float)readline('Введите координату y: ');

switch (true) {
    case $x === 0.0 && $y === 0.0:
        echo "Точка ($x, $y) — начало координат (0, 0).\n";
        break;
    case $y === 0.0:
        echo "Точка ($x, $y) лежит на оси абсцисс (оси X).\n";
        break;
    case $x === 0.0:
        echo "Точка ($x, $y) лежит на оси ординат (оси Y).\n";
        break;
    case $x > 0 && $y > 0:
        echo "Точка ($x, $y) в I квадранте.\n";
        break;
    case $x < 0 && $y > 0:
        echo "Точка ($x, $y) во II квадранте.\n";
        break;
    case $x < 0 && $y < 0:
        echo "Точка ($x, $y) в III квадранте.\n";
        break;
    default:
        echo "Точка ($x, $y) в IV квадранте.\n";
}
