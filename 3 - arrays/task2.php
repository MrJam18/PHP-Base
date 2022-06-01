<?php
$wishes = ["счастья", "здоровья", "успеха", "достатка", "удовольствия", "величия", "продуктива", "настроения", "любовного благополучия", "мира", "добра"];
$epithets = ["бесконечного", "крепкого", "доброго", "чистого", "лучшего", "легкого", "чудесного", "нежного", "крылатого", "чумачечего", "золотого", "яркого"];
$name = readline("Укажите имя." . PHP_EOL);
$string = "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю ";
$wishesArray = array_rand($wishes, 3);
$epithetsArray = array_rand($epithets, 3);


for($i = 0; $i <= 2; $i++){
    $wishesAndEpitets[] = $epithets[$epithetsArray[$i]] . ' ' . $wishes[$wishesArray[$i]];
}
$string .= implode(', ', $wishesAndEpitets) . '.';

echo $string;