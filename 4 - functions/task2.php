<?php
declare(strict_types=1);
$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
function mathCount (array $array): array {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    $avg = $sum / count($array);
    return [
        'min' => min($array),
        'max' => max($array),
        'avg' => $avg
    ];
};

print_r(mathCount($array));