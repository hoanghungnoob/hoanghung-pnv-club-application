<?php
    $wep = ["Ronan", "Him", "Rady", "Hyacinthe", "Ratha"];

    // Use a FOR EACH loop to display the names of WEP trainers
// cú pháp 1
    echo"Answer:  ";
    foreach( $wep as $key ) {
        echo $key .' ';
    }

//     echo "Cú pháp 2\n";

// // cú pháp 2
//      foreach($wep as $key => $value) {
//         //$key hay còn gọi là index
//         echo $key .' ';
//         echo $value .' ';
//         echo "\n";
//      }
/**Cú pháp 1: 

foreach ($array as $value) {

//code to be executed

}

Cú pháp 2

foreach ($array as $key => $element) {

//code to be executed

} */

?>