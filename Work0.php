<?php
$x = 1;
echo "Введите конечное число ";
$n = readline() . PHP_EOL;
while ($x <= $n) {
   if ($x % 3 == 0) {
      echo $x . PHP_EOL;
   }
   ++$x;
}
