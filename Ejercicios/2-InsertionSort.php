<?php
function insertionSort1(int $n, array $arr): void {
    $valueToInsert = $arr[$n - 1];
    // Comenzamos la comparación
    $i = $n - 2;
    while ($i >= 0 && $arr[$i] > $valueToInsert) {
        $arr[$i + 1] = $arr[$i];
        echo implode(" ", $arr) . "\n";
        $i--;
    }
    // Inserta el valor guardado en esa posición.
    $arr[$i + 1] = $valueToInsert;
    echo implode(" ", $arr) . "\n";
}
// --- Ejemplos de uso ---
$n1 = 5;
$arr1 = [2, 4, 6, 8, 3];
echo "Input 1:\n";
insertionSort1($n1, $arr1);
echo "\n";
$n2 = 7;
$arr2 = [1, 3, 5, 7, 9, 11, 6];
echo "Input 2:\n";
insertionSort1($n2, $arr2);
echo "\n";
$n3 = 5;
$arr3 = [1, 2, 3, 4, 5];
echo "Input 3:\n";
insertionSort1($n3, $arr3);
echo "\n";