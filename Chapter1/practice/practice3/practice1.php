<?php 
$a = (int)readline('Enter an integer: ');
$arr = [];
for ($i=0; $i < $a; $i++) { 
    $n =(int)readline('enter element: ');
    array_push($arr,$n);
}
for ($i=0; $i < count($arr); $i++) { 
    if ($arr[$i]%2==0) {
        echo $arr[$i] ." ";
    }
}



// // Nhập dãy số từ bàn phím
// echo "Nhập dãy số (cách nhau bằng dấu cách): ";
// $input = trim(fgets(STDIN)); // Đọc dãy số từ bàn phím

// // Tách dãy số thành mảng
// $numbers = explode(" ", $input);

// echo "Các số chẵn trong dãy số là: ";
// foreach ($numbers as $number) {
//     // Kiểm tra xem số có phải là số chẵn hay không
//     if ($number % 2 == 0) {
//         echo $number . " ";
//     }
// }