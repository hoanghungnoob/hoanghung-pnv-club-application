<?php
echo "XIn chao  <b>PHP</b>";
// đặt tên biến 
$customerName = "Hung";
$customerDetailEmail = "hoang@gmail"  ;
echo $customerName;
echo '<br>';
$name = "John Doe";

function greet() {
    global $name;
    echo "Hello, " . $name . "!";
}

greet();
echo '<br>';
print("ágfgas");
echo '<br>';

$age = 20;

echo '<br>';
var_dump($age);
echo '<br>';

var_dump($customerName);

$arr = ["sdf","shfgs",20];
var_dump($arr);