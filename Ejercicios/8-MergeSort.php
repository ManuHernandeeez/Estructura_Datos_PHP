<?php
function mergeSort(array $arr): array {
    if (count($arr) <= 1) {
        return $arr;
    }

    $mid = intdiv(count($arr), 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge(array $left, array $right): array {
    $result = [];
    $i = 0; $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i++];
        } else {
            $result[] = $right[$j++];
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i++];
    }

    while ($j < count($right)) {
        $result[] = $right[$j++];
    }

    return $result;
}

// Arreglo original
$input = [38, 27, 43, 3, 9, 82, 10];

// Mostrando
echo "<h3>Arreglo ingresado:</h3>";
print_r($input);

// Ordenamiento con merge sort
$sorted = mergeSort($input);

// Mostrando el resultado
echo "<h3>Arreglo ordenado:</h3>";
echo '<pre>';
print_r($sorted);
echo '</pre>';
?>
