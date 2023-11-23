<?php
/*
    Array Functions

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array

  */

$friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

echo '<pre>';
print_r(array_chunk($friends, 2)); // will group each 2 elements of $friends in a sub-array
echo '</pre>';

$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

echo '<pre>';
print_r(array_chunk($countries, 2, True)); // will use the original aray indexes
echo '</pre>';

echo '<pre>';
print_r(array_change_key_case($countries, CASE_UPPER)); // will upper-case keys
echo '</pre>';

$keys = ["A", "O", "K"];
$values = ["Ahmed", "Osama", "Kamal"];

echo '<pre>';
print_r(array_combine($keys, $values)); // will combine $keys as key and $values as values in 1 array (must be the same length).
echo '</pre>';
