<?php
/*2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.*/

function getNum ($num = 0) {
    $even = false;
    do {
        if ($num == 0) {
            $even = " - ноль";
        }elseif($num % 2 == 1){
            $even = " - нечетное число";
        }elseif($num % 2 == 0){
            $even = " - четное число";
        }
        echo $num.$even."<br>";
        $num++;
    } while ($num <= 10);
}

getNum();