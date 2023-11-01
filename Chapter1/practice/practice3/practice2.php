<?php
// hiển thị số lẻ trong dãy số nhập từ bàn phím
$a = (int)readline('Enter an integer: ');
$arr = [];
for ($i=0; $i < $a; $i++) { 
    $n =(int)readline('enter element: ');
    array_push($arr,$n);
}
for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i]%2!=0) {
        echo $arr[$i] ." ";
    }
}