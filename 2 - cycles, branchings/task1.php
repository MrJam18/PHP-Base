<?php
$write = 'Ратник';
$variant1 = 'Варяг';
$variant2 = 'Древлянин';
$answer = readline("Как в Древней Руси называли воина, дружинника? Введите вариант из следующих: $variant1, $variant2, $write \n");

while( true ) {
    switch($answer){
        case $write:
            echo "Поздравляем, это правильный ответ!";
            break 2;
        case $variant1:
        case $variant2: 
            echo "К сожалению, это неверный ответ.";
            break 2;
        default:
        echo "Вы указали вариант, которого нет в списке. Попробуйте ещё раз.\n";
        $answer = readline("Как в Древней Руси называли воина, дружинника? Введите вариант из следующих: $variant1, $variant2, $write \n");
    }
}