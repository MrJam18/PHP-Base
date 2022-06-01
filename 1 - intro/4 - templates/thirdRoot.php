<?php 
$title = 'Документ №1';
$header1 = 'Информация обо мне.';
$year = 1994;

$content = file_get_contents('thirdTemplate.html');
$content = str_replace('{{title}}', $title, $content);
$content = str_replace('{{header1}}', $header1, $content);
$content = str_replace('{{year}}', $year, $content);


echo $content;


