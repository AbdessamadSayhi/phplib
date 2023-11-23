<?php
// ------------- array_map() ----------------------

/* The array_map() function in PHP is used to apply a callback function to each element of an array 
or multiple arrays. 
The callback function is a function that takes one or more arguments and returns a single value. 
The array_map() function returns a new array containing the results of applying the callback function 
to each element of the input arrays. */

$numbers = array(1, 2, 3, 4, 5);
$doubledNumbers = array_map(function ($x) { // using anonymous function
    return $x * 2;
}, $numbers);

print_r($doubledNumbers); // will print each element of array $numbers multiplyed by 2.

// ------------- another situation ----------------------

$stringNumbers = array("1", "2", "3", "4", "5");
// Using array_map to convert each string to an integer
$intNumbers = array_map('intval', $stringNumbers);
// Result: $intNumbers is now [1, 2, 3, 4, 5]
