<?php

echo "Hello world";
echo "<br>";
var_dump((bool) []);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(array());
echo "<br>";

include('hello.php'); // if hello.php dosn't exsist will show a warnning but wil continue executing the code.
include_once('hello.php'); // Same as include() bit will make sure that the include will be executed just 1 time
require('hello.php'); // if hello.php dosn't exsist will show a fatal error and stop the code.
require_once('hello.php'); // Same concept.

str_split("abdessamad");
strtoupper("abdessamad");
ord('A');
count([1, 2, 3, 4, 5]);
strlen("Abdessamad");
$alphabets = ['a', 'b', 'c'];
array_push($alphabets, "d", "e", "f");
$alphabets = array_merge($alphabets, range('g', 'y'));
$alphabets[] = 'z';

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
    foreach ($chars as $i => $v) {
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
    echo $country . "<br>";
}
