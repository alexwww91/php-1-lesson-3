<?php
//С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
$num = 0;
while ($num <= 100) {
    if ($num % 3 == 0) {
    echo $num."<br>";
    }
    $num++;
}