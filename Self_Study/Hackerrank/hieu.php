

<?php
// bài 1
$N = intval(fgets(STDIN));

$numbers = explode(" ", trim(fgets(STDIN)));

$sum_even = 0;
$sum_odd = 0;
for ($i = 0; $i < $N; $i++) {
    if ($i % 2 == 0) { 
        $sum_even += $numbers[$i];
    } else {
        $sum_odd += $numbers[$i];
    }
}

$result = $sum_odd-$sum_even ;

echo $result;

?>