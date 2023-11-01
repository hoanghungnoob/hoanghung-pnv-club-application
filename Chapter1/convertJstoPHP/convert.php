<?php
// // variable
// $name = "hung";
// $number = 123;
// // output
// echo $name;
// print $number;
// print_r($number);//
// // console log
// echo '<script> console.log("hello")</script>';
// printf("Name: ", $name);
// // error_log("loix");
// // conf alert
// echo '<script> alert("hello") </script>';
// var_dump($number);

// this is a comment
# this is a comment
/*this is a comment
many line */

// // array
// $srr = array();
// $array = array(1,2,3);
// $array = [1,"hung",3];

// $matrix = array(
//     'name'=> 'hung',
//     'age'=> 20
// );

// $matrix = array(
//     array(1,2,3),
//     array(2,3,4)
// );

// $array = array(1,2,3);
// echo $array[0]; // index = 0 first element
// echo count($array); // length of array
// echo $array[1] = 5; // replace
// echo $array[3] = 5; // add new element

// $array = [1,2,3];
// array_push($array,3,4);

// // constants
// define("SCHOOL_NAME","PNV");
// echo SCHOOL_NAME

// $num = 5;
// if ($num < 5) {
//     echo"number <5";
// }elseif ($num == 5) {
//     echo "number =5";
// }else{
//     echo"number>5";
// }

$arrs = [1,2,3,4];
for ($i=0; $i < count($arrs); $i++) { 
    echo $arrs[$i] ." ";
}
$web = array("php","java","python");
//for in - trong PHP không có forin có thể thay thế bằng for each để lấy các phần tử
$array = array("apple", "banana", "cherry");
// foreach ($array as $key => $value) {
//     echo "Index: $key";
// }
//for of- trong PHP không có forof có thể thay thế bằng for each để lấy các phần tử
foreach( $web as $lang ) {
    echo $lang;
}

// $arrs = [1,2,3,4];
// $i=0 ;
// while ($i < count($arrs)) {
//     echo $arrs[$i] ." ";
//     $i++;
// }

// $fruits = array("apple", "banana", "cherry", "date");

// foreach ($fruits as $fruit) {
//     echo "I like $fruit<br>";
// }

//function
// function getName() {
//     echo  "hùng";
// }
// getName();
    
// $name = "hùng";
// function getName($name)  {
//     print_r("Name $name");
// }
// getName($name);

?>