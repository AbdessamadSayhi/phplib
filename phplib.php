<?php

echo "Hello world";
echo "<br />";
var_dump((bool) []);
echo "<br />";
echo gettype([]);
echo "<br />";
echo gettype(array());
echo "<br />";

include('hello.php'); // if hello.php dosn't exsist will show a warnning but wil continue executing the code.
include_once('hello.php'); // Same as include() bit will make sure that the include will be executed just 1 time
require('hello.php'); // if hello.php dosn't exsist will show a fatal error and stop the code.
require_once('hello.php'); // Same concept.

str_split("abdessamad"); // return string as array

strtoupper("abdessamad"); // convert string to uppercase letters

ord('A'); //  return ASCII code of the given characters

count([1, 2, 3, 4, 5]); // get length of array

strlen("Abdessamad"); // get length of string

$alphabets = ['a', 'b', 'c']; // declare and assing value to array

array_push($alphabets, "d", "e", "f"); // pushing to the end of array

range('a', 'z'); //return an array of key values of letters from a to z
// make sure with print_r(gettype(range('a', 'z')));

$alphabets = array_merge($alphabets, range('g', 'y')); // array_merge(string1,string2) concatinate 2 strings
// range(1,10) return a range of integers starting point (included) to ending point (excluded)
$alphabets[] = 'z'; // push to the ends of the array the letter 'z'

// To iterate over the characters in 
// the string variable $word = "Hello" 
//you can use a for loop or a foreach loop.
$word = "Hello";
$stringasarray = str_split($word);
//We should use str_split() to convert the string into an array of characters.
foreach ($stringasarray as $letter) {
    echo $letter; // will print each letter of the variable $word or $stringasarray.
}
// Using for loop could be easier in this case:
for ($i = 0; $i < strlen($word); $i++) {
    $char = $word[$i];
    echo $char;
}

header("location: page.php"); //redirecting to page.php

function designerPdfViewer($h, $word)
{
    $chars = str_split($word);
    $alphabets = range('a', 'z');
    $heights = array();
    foreach ($chars as $i => $v) { // we are using $i as key and $v as values of the array $chars
        $heights[] = $h[array_search($v, $alphabets)];
    }
    return max($heights) * count($heights);
}

// The intdiv() function discards the remainder and returns 
//only the whole number part of the division result.
$result = intdiv(10, 3);
echo $result;  // Outputs 3

//foreach
$countries_with_discount = ["MA" => 99, "EGY" => 50, "FR" => 0];
foreach ($countries_with_discount as $country) {
    echo $country;
}
foreach ($countries_with_discount as $country => $discount) {
    echo $country . "discount is" . $discount;
}

foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {

    if ($country == "USA") {
        continue; //will ignore this itteration but will continue the loop
    }
    echo $country . "<br />";
}

$numbers = [10, 2, 34, 24, 12, 1, 43, 23];
echo "the sum of numbers is " . array_sum($numbers); //array_sum() return the sum of all numbers withing the array.

// ------------- array_map() ----------------------
/* The array_map() function in PHP is used to apply a callback function to each element of an array 
or multiple arrays. The callback function is a function that takes one or more argument
s and returns a single value. The array_map() function returns a new array containing
 the results of applying the callback function to each element of the input arrays. */
$numbers = array(1, 2, 3, 4, 5);
$doubledNumbers = array_map(function ($x) { // using anonymous function
    return $x * 2;
}, $numbers);

print_r($doubledNumbers); // will print each element of array $numbers multiplyed by 2.

$associativeArray = [
    'key1' => 'value1',
    'key2' => null,
    'key3' => 'value3',
    'key4' => null,
];

$numberOfNonNullElements = 0;

foreach ($associativeArray as $key => $value) {
    if ($key !== null && $value !== null) {
        $numberOfNonNullElements++;
    }
}
