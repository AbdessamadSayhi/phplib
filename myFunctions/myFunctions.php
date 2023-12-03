<?php

namespace myFunctions;

function my_array_key_exsists($results, $check)
{
    foreach ($results as $name => $note) {
        if ($check == $name) {
            return true;
        }
    }
    return false;
}

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
