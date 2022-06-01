<?php 
$answer = readline("Представьте, что вы ведёте счёт на пальцах одной ладони, не считая два раза подряд один и тот же, начиная с большого. Дойдя до мизинца, вы продолжаете счёт в обратном направлении. Укажите целое число,которое будет результатом подсчета пальцев \n");

while($answer <= 0 ) {
    $answer = readline('Укажите корректноре целое число!');
}
$countAnswer = (int)(($answer - 2) / 4);
$countFinger = ($answer - 2) % 4;
$finger = '';
if($answer <= 5) {
    switch($answer){
        case(1):
            $finger = 'большой';
            break;
        case(2):
            $finger = 'указательный';
            break;
        case(3):
            $finger = 'средний';
            break;
        case(4):
            $finger = 'безымянный';
            break;
        case(5):
            $finger = 'мизинец';
            break;
        }
}
elseif(($countAnswer % 2) == 1 ) {
    switch($countFinger){
        case(0):
            $finger = 'безымянный';
            break;
        case(1):
            $finger = 'средний';
            break;
        case(2):
            $finger = 'указательный';
            break;
        case(3):
            $finger = 'большой';
            break;
    }
}
else {
    switch($countFinger){
        case(0):
            $finger = 'указательный';
            break;
        case(1):
            $finger = 'средний';
            break;
        case(2):
            $finger = 'безымянный';
            break;
        case(3):
            $finger = 'мизинец';
            break;
        }
}

echo "число $answer указывает на $finger палец.";