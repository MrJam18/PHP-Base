<?php
$array =  ["str", 2, 3, 4, 5, 0, 0, 0, 0, 0];
$goodArray = [];
foreach ($array as $value) {
    if($value){
        $goodArray[] = $value;
        $goodArray[] = $value;
    }
}
print_r($goodArray);