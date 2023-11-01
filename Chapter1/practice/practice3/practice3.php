<?php
//tính giai thừa
$number = (int)readline('Enter a number: ');
$giaithua=1;
for ($i=0; $i <$number; $i++) {
        $giaithua *=($number-$i);
}
echo "giá trị giai thừa của $number là: " .$giaithua;