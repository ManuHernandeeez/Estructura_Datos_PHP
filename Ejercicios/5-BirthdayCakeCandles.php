<?php
function birthdayCakeCandles($candles) {
    $max = max($candles);
    $count = count(array_filter($candles, fn($c) => $c == $max));

    echo "Las alturas de las velas son: " . implode(", ", $candles) ."<br>";
    echo "La altura más alta es: $max<br>";
    echo "La cantidad de velas más altas es: $count<br>";
}

// Alturas de las velas
$candles = [3, 4, 1, 3, 6];
birthdayCakeCandles($candles);
?>
