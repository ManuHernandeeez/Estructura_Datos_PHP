<?php
function heightChecker(array $heights): int {
    $expected = $heights;
    sort($expected);
    $count = 0;
    for ($i = 0; $i < count($heights); $i++) {
        if ($heights[$i] !== $expected[$i]) {
            $count++;
        }
    }
    return $count;
}
// --- Ejemplos de uso ---
$heights1 = [1,1,4,2,1,3];
$output1 = heightChecker($heights1);
echo "Input: [" . implode(",", $heights1) . "]\n";
echo "Output: " . $output1 . " (Expected: 3)\n\n";
$heights2 = [5,1,2,3,4];
$output2 = heightChecker($heights2);
echo "Input: [" . implode(",", $heights2) . "]\n";
echo "Output: " . $output2 . " (Expected: 5)\n\n";
$heights3 = [1,2,3,4,5];
$output3 = heightChecker($heights3);
echo "Input: [" . implode(",", $heights3) . "]\n";
echo "Output: " . $output3 . " (Expected: 0)\n\n";

