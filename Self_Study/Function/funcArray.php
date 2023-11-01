<?php
// push
$arr = [1, 2, 3];
array_push($arr, 4, 5);
print_r($arr); // Output: Array([0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5)
echo"\n";
//pop
$arr = [1, 2, 3];
$pop = array_pop($arr);
print_r($pop);  // outpu: 3
echo"\n";
//shift
$arr = [1, 2, 3];
$firstElement = array_shift($arr);
echo $firstElement; // Output: 1
echo"\n";
//unshift
$arr = [1, 2, 3];
array_unshift($arr,2,3); // output Array ( [0] => 2 [1] => 3 [2] => 2 [3] => 3 )
// print_r($arr);
for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i];
}
echo"\n";

$arr = [1, 2, 3, 4, 5,6];
$slice = array_slice($arr, 2, 3);
print_r($slice); 
/* output: Array
(
    [0] => 3
    [1] => 4
    [2] => 5
)*/
echo"\n";

$arr = [1, 2, 3];
$rev = array_reverse($arr);
print_r($rev);
/*output:Array
(
    [0] => 3
    [1] => 2
    [2] => 1
)


 */
$matrix = array(
    'name'=> 'hung',
    'age'=> 20
);
print_r($matrix);
// $data = [1, 2, 3];
// var_dump($data);
// $data = array(
//     'name' => 'John Doe',
//     'age' => 25,
//     'email' => 'johndoe@example.com'
// );
// print_r($data);

// $string = "This is a sample sentence.";
// $numWords = str_word_count($string);
// echo $numWords;
// $count =strlen($string);
// echo $count;
// // Output: 5