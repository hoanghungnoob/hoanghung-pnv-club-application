<?php
echo"PHP program";
echo "<br>";
$number = [1,2,3,4,5];
for ($i = 0; $i < count($number); $i++){
    echo $number[$i];
}
$i=0;
while ($i < count($number)) {
    echo $number[$i];
    $i++;
}

?>