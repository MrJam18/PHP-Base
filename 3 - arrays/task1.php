<?php
$array1 = [];
$array2 = [];

for($i = 0; $i <= 50; $i++ ) {
    $array1[] = rand(0, 100);
    $array2[] = rand(0, 100);
    print_r($array1);
    print_r($array2);
    print_r($array1[$i] * $array2[$i] . PHP_EOL);
}