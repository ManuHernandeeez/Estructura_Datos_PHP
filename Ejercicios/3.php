<?php

/**
 * Bynary Search
 */

function busquedaBinaria($num, $target)
{
    $begin =  0;
    $end = count($num) - 1;

    while ($begin <= $end) {

        $middle = intval(($begin + $end) / 2);

        if ($num[$middle] === $target) {
            return $middle;
        }

        if ($num[$middle] < $target) {
            $begin = $middle + 1;
        } else {
            $end = $middle - 1;
        }
    }
    return -1;
}

$num1 = [-1, 0, 3, 5, 9, 12];
$target1 = 9;
echo "Prueba 1: " . busquedaBinaria($num1, $target1) . "<br><br>";

$num2 = [1, 2, 3, 4, 5, 6, 7];
$target2 = 5;
echo "Prueba 2: " . busquedaBinaria($num2, $target2) . "<br><br>";
