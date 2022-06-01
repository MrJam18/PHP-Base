<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Сергеев Андрей' => 2,
        'Искандеров Михаил' => 4,
        "Мартынов Иван" => 2
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        "Чичваркин Роман" => 2,
        "Андропов Сергей" => 5
    ],
    "ЮТ21" => [
        "Пименов Геннадий" => 2,
        "Варламов Никита" => 4,
        "Кондратьева Екатерина" => 5,
        "Угрюмова Светлана" => 3
    ]
];
$remandList = [];

foreach ($students as $key => $group) {
    $maxGrade = 0;
    $groupGrade = 0;
    foreach ($group as $name => $grade) {
        $groupGrade += $grade;
        if($grade < 3) {
            $remandList[$key][$name] = $grade;
        }
    }
    $middleGrade = $groupGrade / count($group);
    if($middleGrade > $maxGrade) {
        $maxGrade = $middleGrade;
        $maxGradeName = $key;
    }
}
echo "Группа с лучшей средней успеваемостью - $maxGradeName. Успеваемость - $maxGrade" . PHP_EOL;
echo "Студенты на отчисление - ";
print_r($remandList);