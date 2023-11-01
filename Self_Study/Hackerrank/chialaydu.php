<?php
$_fp = fopen("php://stdin", "r");

list($N, $K) = explode(" ", trim(fgets($_fp)));

$numbers = explode(" ", trim(fgets($_fp)));

$remainderArray = array();

foreach ($numbers as $num) {
    $remainder = $num % $K;
    $remainderArray[$remainder] = true; 
}
$count = count($remainderArray);

echo $count;

fclose($_fp);
?>
