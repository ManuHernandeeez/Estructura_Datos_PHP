<?php

function minimunNumber($n, $password)
{

    $numbers = "0123456789";
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $special_characters = "!@#$%^&*()-+";

    $missing_types = 0;


    //Verificar si faltan digitos
    $has_digit = false;

    foreach (str_split($numbers) as $char) {
        if (strpos($password, $char) !== false) {
            $has_digit = true;
            break;
        }
    }

    if (!$has_digit) {
        $missing_types++;
    }

    //verificar si faltan letras minus
    $has_lower = false;

    foreach (str_split($lower_case) as $char) {
        if (strpos($password, $char) !== false) {
            $has_lower = true;
            break;
        }
    }

    if (!$has_lower) {
        $missing_types++;
    }

    //verificar si falta una letra mayus
    $has_upper = false;
    foreach (str_split($upper_case) as $char) {
        if (strpos($password, $char) !== false) {
            $has_upper = true;
            break;
        }
    }
    if (!$has_upper) {
        $missing_types++;
    }

    //verificar si falta un caracter
    $has_special = false;
    foreach (str_split($special_characters) as $char) {
        if (strpos($password, $char) !== false) {
            $has_special = true;
            break;
        }
    }
    if (!$has_special) {
        $missing_types++;
    }


    //
    return max($missing_types, 6 - $n);
}

//
$password = "AAAAA";
$n=6;

$result1 = minimunNumber($n, $password);
echo "La contraseña '" . $password . "', necesita añadir: " . $result1 . " caracteres.\n"; 
