<?php
for($i=1; $i <= 100; $i++) {
    if($i % 3 == 0) {
        echo 'Fizz';
        if($i % 5 == 0) {
            echo "Buzz \n";
        }
        else echo "\n";
        continue;
    }
    if($i % 5 == 0) {
        echo "Buzz \n";
    }
    echo "$i \n";
}