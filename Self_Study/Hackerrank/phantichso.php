<?php
$_fp = fopen("php://stdin", "r");

$N = intval(fgets($_fp)); // Đọc số nguyên dương N từ STDIN

function primeFactors($n) {
    $factors = array();
    for ($i = 2; $i <= $n; $i++) {
        while ($n % $i === 0) {
            $factors[] = $i;
            $n /= $i;
        }
    }
    return $factors;
}

$result = primeFactors($N);

echo implode("*", $result);

fclose($_fp);
/*
Đầu tiên, chúng ta đọc số nguyên dương N từ STDIN bằng cách sử dụng fgets và chuyển giá trị đó thành một số nguyên bằng intval.

Tiếp theo, chúng ta sử dụng một hàm primeFactors để phân tích N thành các thừa số nguyên tố và lưu chúng trong một mảng $factors.
 Hàm này hoạt động như sau:

Chúng ta duyệt từ 2 đến N bằng một vòng lặp for.
Trong vòng lặp, chúng ta kiểm tra xem N có chia hết cho i không (tức là i là một thừa số nguyên tố của N). Nếu có, chúng ta thêm i vào mảng $factors và giảm giá trị của N cho đến khi không còn chia hết nữa.
Cuối cùng, chúng ta sử dụng hàm implode để kết hợp các thừa số nguyên tố trong mảng $factors bằng dấu "*". Kết quả cuối cùng sẽ được in ra STDOUT theo đúng định dạng yêu cầu.

Ví dụ:

Nếu bạn nhập 24, thì N sẽ được phân tích thành các thừa số nguyên tố là 2, 2, 2, và 3, và kết quả sẽ là "222*3".
Nếu bạn nhập 12, thì N sẽ được phân tích thành các thừa số nguyên tố là 2, 2, và 3, và kết quả sẽ là "223".*/
?>
