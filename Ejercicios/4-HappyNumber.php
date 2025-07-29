<?php

/**
 * Happy Number
 */

function numeroFeliz($num)
{
    $history  = [];

    while ($num !== 1) {
        if (isset($history[$num])) {
            return false;
        }

        $history[$num] = true;
        $num = sumCuadros($num);
    }

    return true;
}

function sumCuadros($number)
{
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit * $digit;
        $number = intdiv($number, 10);
    }

    return $sum;
}

//happy = true
echo numeroFeliz(19) ? 'true' : 'false';

echo "<br><br>";
//happy = false
echo numeroFeliz(22) ? 'true' : 'false';
