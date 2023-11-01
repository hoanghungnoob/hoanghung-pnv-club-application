<?php

$N = intval(fgets(STDIN));

$numbers = explode(" ", trim(fgets(STDIN)));

$sum_even = 0;
for ($i = 0; $i < $N; $i++) {
    if ($numbers[$i] % 2 != 0) { 
        $sum_even += $numbers[$i];
    }
}
echo $sum_even;
?>