<?php
//vẽ tam giác sao với N là cạnh
$N=(int)readline("Nhập cạnh của tam giác: ");
$str="";
for ($i=0; $i < $N; $i++) { 
    $str .= "* ";
    echo $str ."\n";
}