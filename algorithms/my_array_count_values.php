<?php

function my_array_count_values($arr)
{
    $newarr = [];
    foreach ($arr as $key => $value) {
        if (array_key_exists($value, $newarr) == false) { // ila mal9inach value f newarr kanzidouha @var_dump($newarr[$value] == false)
            $newarr[$value] = 1;
        } else {
            $keycpt = $newarr[$value];
            $newarr[$value] = ++$keycpt;
        }
    }
    echo "newarr: <pre>";
    print_r($newarr);
    echo "</pre>";
}
$arr = [1, 2, 4, 5, 6, 6, 10, 6, 10, 11, 10, 2, 6];
my_array_count_values($arr);
echo "<pre>";
print_r(array_count_values($arr));
echo "</pre>";
