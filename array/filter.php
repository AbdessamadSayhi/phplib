<?php
/* $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$result = array_filter(
    $nums,
    fn ($even_num) =>
    $even_num % 2 == 0
);
echo "<pre>";
print_r($result);
echo "</pre>"; */

$a = [1, 1, 1, 0.99, 1, 1];
function find_uniq($a)
{
    $temp = json_encode($a);
    echo "<br>$temp<br>";
    echo "<br>" . gettype($temp) . "<br>";
    echo $temp[0];
    $arrayWithConsistentTypes = json_decode($temp);
    $res = array_count_values($arrayWithConsistentTypes);
    echo "<pre>";
    print_r($res);
    echo "</pre>";

    /*     $cc = array_count_values($a);
    $key = array_search(1, $cc);
    return $key; */
}
echo "<br>**" . find_uniq($a) . "**<br>";
