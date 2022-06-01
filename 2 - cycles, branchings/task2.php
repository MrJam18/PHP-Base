<?php

$name = readline("Привет, как тебя зовут? \n");
$taskCount = readline("Сколько задач у тебя запланировано на сегодня, $name?\n");
while($taskCount == 0){
    $taskCount = readline("Введите числовое значение для количества задач! \nСколько задач у тебя запланировано на сегодня, $name?\n");
}
$taskAcc = "$name, У вас сегодня запланированы $taskCount приоретных задач: \n";
for($i = 1; $i <= $taskCount; $i++) {
    $task = readline("Опишите задачу $i на сегодня. \n");
    $time = readline(("$name, Сколько примерно часов уйдет у тебя на её выполнение? \n"));
    while($time == 0){
        $time = readline("Введите числовое значение для количества часов! \nСколько примерно часов уйдет у тебя на её выполнение $name?\n");
    }
    $taskAcc .= "- $task ($time ч.)\n";
}

echo $taskAcc;
