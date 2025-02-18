<?php
for ($num = 1; $num <= 100; $num++) {
   $norml = true;
   for ($i = 2; $i <= sqrt($num); $i++) {
      if ($num % $i == 0) {
         $norml = false;
      }
   }
   if ($norml && $num > 1) {
      echo $num . PHP_EOL;
   }
}
