<?php
declare(strict_types=1);
$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$array = array_map(fn($el) => $el % 2 ? 'Нечетное' : 'Четное', $array);
print_r($array);