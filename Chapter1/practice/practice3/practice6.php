<?php
// in tam giác đối xứng
$N =(int)readline("Nhập độ dài cạnh của mỗi tam giác: ");
// In tam giác từ trái sang phải
for ($i = 1; $i <= $N; $i++) {
    $str = str_repeat("* ", $i);
    echo $str."\n";
}
// In tam giác từ phải sang trái
for ($i = $N ; $i >= 1; $i--) {
    $str = str_repeat("* ", $i);
    echo $str."\n";
}