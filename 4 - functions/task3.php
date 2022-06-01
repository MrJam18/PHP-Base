<?php
declare(strict_types=1);
require 'box.php';

function findThing(string $thing, array $array): bool {
    print_r($array);
        foreach ($array as $value) {
            if (getType($value) == 'array') {
                if (findThing($thing, $value)) return true;
            } else {
                if ($thing == $value) return true;
            }
        }
   return false;
}

print_r(findThing('Клаывюч', $box));