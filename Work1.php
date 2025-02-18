<?php
$y = 1;
$x = 1;
$n;
echo "Введите конечное число ";
$n = (int)readline() . PHP_EOL;
while ($x <= $n) {
   $y = $x * $y;
   $x++;
}
echo $y;
