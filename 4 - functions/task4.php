<?php
declare(strict_types=1);
function findFactorial(int $number, int &$factorial = 1) {
    if($number == 1) return $factorial;
    $factorial *= $number;
    findFactorial($number - 1, $factorial);
    return $factorial;
}
$factorial = findFactorial(5);
echo $factorial;