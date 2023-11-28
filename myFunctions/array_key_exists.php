<?php
$results = ["Abdou" => 20, "Mohamed" => 16, "Ayman" => 12, "Bo7ot" => 17];

/* echo '<pre>';
print_r($results);
echo '</pre>';

echo var_dump(array_key_exists("Abdou", $results)) . "<br>"; */

function my_array_key_exsists($results, $check)
{
    foreach ($results as $name => $note) {
        if ($check == $name) {
            return true;
        }
    }
    return false;
}
/* echo "my_array_key_exsists <br>";
echo my_array_key_exsists($results, "Mohamed");
 */