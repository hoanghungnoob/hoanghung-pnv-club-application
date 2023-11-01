<?php
// kiểm tra số nguyên tố
$number = (int)readline("input number to check: ");
$bool =true;
if ($number == 1) {
    $bool =false;
}
for ($i=2; $i < $number; $i++) {  
        if ($number%$i==0) {
            $bool=false;
            break;
        }
}
if($bool==true){
    print_r("Đây là số nguyên tố");
} else{
    print_r("Đây không phải là số nguyên tố");
}