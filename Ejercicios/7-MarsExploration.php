<?php

function marsExploration(string $s) {
    $changed_letters = 0;
    $n = strlen($s);

    for ($i = 0; $i < $n; $i++) {

        //determinar la posicion 
        $pos_in_sos = $i % 3;

        //Verificamos si es el caracter esperado S u O
        if ($pos_in_sos === 0 || $pos_in_sos === 2) { 
            if ($s[$i] !== 'S') {
                $changed_letters++;
            }
        } elseif ($pos_in_sos === 1) {
            if ($s[$i] !== 'O') {
                $changed_letters++;
            }
        }
    }
    return $changed_letters;
}

$s1 = 'SOSSASSUS';
$result1 = marsExploration($s1);
echo "Mensaje: '" . $s1 . "'\n";
echo "Cantidad de letras cambiadas: " . $result1 . "\n\n"; 


?>