<?php

    $fruit = ['name' => 'mango', 'quantity' => 15, 'price' => 10, 'country' => "Cambodia"];
	
	// The money you have
    $money = 11;
	if ($money<0) {
        echo"Error: Your money cannot be negative";
    } elseif ($money==$fruit['price']) {
        echo "You have enough money to buy this fruit";
    }
    elseif ($money>=0 && $money<$fruit["price"]) {
        echo "You need more money to buy this fruit";
    }
    else{
        echo "You have money left over when you buy this fruit";
    }
    // Display 
	// "Error: Your money cannot be negative" if money is negative,
    // or "You have enough money to buy this fruit"
    // or "You need more money to buy this fruit"

?>