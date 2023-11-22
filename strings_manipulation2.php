<?php

/*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */
// before php 7 we could use these values by using the name of the variable now we should use the query array.
parse_str("name=Abdessamad&email=abdou@gmail.com&os=win", $query);

echo '<pre>';
print_r($query);
echo '</pre>';

echo $query["name"] . "<br>";
echo $query["email"] . "<br>";
echo $query["os"] . "<br>";

echo "Hello [] () * + . <br>";
echo quotemeta("Hello [] () * + . <br>");

echo strtr("Abde@@amad Sayhi", "@", "s");

echo "<br>";

$translation = ["@" => "l", "#" => "o"];

echo strtr("E@zer# Web Sch##@", $translation);
