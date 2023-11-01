<?php
$value1 = "Hoàng Hữu";
$value2 = " Hùng";
//nối và hiển thị
    // nối chuỗi thông thường thì nó sẽ liền lại với nhau vì vậy có dấu cách trước biến thứ 2 để tạo khaorng cách
    // echo $value1.$value2;
    // ngoài ra có thể nối với dấu cách
    // echo $value1." ".value2;
// nối và gán
    // $value = $value1.$value2;
    // echo $value;

// có thể nối theo cách chuỗi nối với 1 biến
    // $value3 = $value1." Hùng";
    // echo $value3;

// nối chuỗi với dấu  nháy đơn thì phải kết thúc dấu nháy đơn mới được nối
    // đây là họp lệ với dấu nháy đơn
        $valid = 'Học cách sống'.$value2;
        echo $valid;
        echo '<br>';
    // đây là bất hợp lệ, nó sẽ coi $value2 như là chuỗi
        $valid1 = 'Học cách sống $value2';
// nối chuỗi với dấu nháy kép
    // nó cũng có thể nối như thế này
        $valid = "Học cách sống".$value2;
        echo $valid;
    // nó cũng có thể nối như thế này
        $valid = "Học cách sống $value2";
        echo $valid;  // cả hai cách đều hợp lệ
$htmlOutput='<a href="https://fullstack.edu.vn"><img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/IMG_logo_%282017%29.svg" alt=""></a>';
echo $htmlOutput;