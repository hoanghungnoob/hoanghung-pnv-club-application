<?php
// // hiển thị số chẵn trong dãy từ 1->100
// for ($i = 1; $i <= 100; $i++) {
//     if ($i %2== 0) {
//         print_r($i ." ");
//     }
// }
// echo "\n";
// //hiển thị số lẻ
// for ($i = 1; $i <= 100; $i++) {
//     if ($i %2!= 0) {
//         print_r($i ." ");
//     }
// }

// //tính giai thừa
// // công thức toán n! = n × (n – 1) × (n – 2) × … × 2 × 1
// $number = 17; // 5*4*3*2*1
// //number =17 output =1307674368000
// // chỉ tính các số trong khoảng từ 1->15
// if($number>15){
//     $number=15;
// }
// $giaithua=1;
// for ($i=0; $i <$number; $i++) {
//         $giaithua *=($number-$i);
// }
// echo $giaithua;

// //Kiểm tra 1 số N có phải là số nguyên tố hay không. In ra màn hình các số nguyên tố < 100
for ($i=2; $i <= 100; $i++) { 
    $bool =true;
    for ($j=2; $j < $i; $j++) { 
        if ($i%$j==0) {
            $bool=false;
            break;
        }
    }
    if($bool==true){
        print_r($i ." ");
    } 
}

// //in bảng cửu chương
// for ($i=2; $i < 10; $i++) { 
//     for ($j=1; $j < 11; $j++) { 
//         printf("%2d x %d = %2d ",$i,$j,$i*$j);
//     }
//     echo "\n";
// }

// vẽ bàn cờ vua
//cách 1
// for ($i=0;$i<8;$i++){
//     if($i%2==0){
//         for ($j=0; $j < 8; $j++) { 
//             if ($j%2==0) {
//                 print("O ");
//             }else{
//                 print("X ");
//             }
//         }
//         print("\n");
//     }else{
//         for ($j=0; $j < 8; $j++) { 
//             if ($j%2==0) {
//                 print("X ");
//             }else{
//                 print("O ");
//             }
//         }
//         print("\n");
//     }
// }
// //cách2
// echo"----------------\n";
// for ($i = 0; $i < 8; $i++) {
//     for ($j = 0; $j < 8; $j++) {
//         if (($i + $j) % 2 == 0) {
//             echo "O ";
//         } else {
//             echo "X ";
//         }
//     }
//     echo "\n";
// }

//vẽ tam giác sao
// $N=5;
// $str="";
// for ($i=0; $i < $N; $i++) { 
//     $str .= "* ";
//     echo $str ."\n";
// }

// vẽ tam giác đối xứng
// $N = 5;

// // In tam giác từ trái sang phải
// for ($i = 1; $i <= $N; $i++) {
//     $str = str_repeat("* ", $i);
//     echo $str."\n";
// }
// // In tam giác từ phải sang trái
// for ($i = $N ; $i >= 1; $i--) {
//     $str = str_repeat("* ", $i);
//     echo $str."\n";
// }