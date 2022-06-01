<?php 
$count = readline("Введите количество яблок\n");
while($count <= 0) {
    $count = readline("Введите корректное количество яблок! \n");  
}
if($count > 10 and $count < 20) {
    $ending = 'яблок';
}
else {
    $countEnding = $count % 10;
    if($countEnding == 1) $ending = 'яблоко';
    elseif($countEnding >= 2 and $countEnding <= 4) $ending = 'яблока';
    else $ending = 'яблок';
}

echo "У вас $count $ending";