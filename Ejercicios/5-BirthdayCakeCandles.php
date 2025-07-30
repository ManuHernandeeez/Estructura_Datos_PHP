<?php
function birthdayCakeCandles($candles) {
    $maxHeight = max($candles);
    $count = 0;
    foreach ($candles as $height) {
        if ($height == $maxHeight) {
            $count++;
            
        }
    }
    echo "Las alturas de las velas son: " . implode(", ", $candles) ."<br>";
    echo "La altura más alta es: $maxHeight<br>";
    echo "La cantidad de velas más altas es: $count<br>";
}

// Alturas de las velas
$candles = [3, 2, 1, 3];
birthdayCakeCandles($candles);
?>
