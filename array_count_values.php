<?php
include("array_key_exists.php");
$counting = ["A", "A", "A", "B", "B", "B", "C", "C"];

/* echo '<pre>';
print_r($counting);
echo '</pre>'; */

function my_array_count_values($counting)
{
    $newCounting = [];
    foreach ($counting as $value) {
        if (my_array_key_exsists($newCounting, $value)) {
            $newCounting[$value]++;
        } else {
            $newCounting[$value] = 1;
        }
    }
    return $newCounting;
}

echo "array_count_values: <br>";
echo '<pre>';
print_r(array_count_values($counting));
echo '</pre>';

echo "my_array_count_values: <br>";
echo '<pre>';
print_r(my_array_count_values($counting));
echo '</pre>';
