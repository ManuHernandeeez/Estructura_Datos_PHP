<?php

function aVeryBigSum($ar) {
    $sum = 0;
    foreach ($ar as $num) {
        $sum += $num;
    }
    return $sum;
}

// cantidades de prueba
$ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

echo "Los números a sumar son: " . implode(", ", $ar) . "<br><br>";
echo "La suma total es: " . aVeryBigSum($ar) . "<br>";
?>