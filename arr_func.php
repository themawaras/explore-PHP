<?php

$myArr = [5, 6, 7, 8];

$multipleMyArr = fn (int $val) => $val * 10;

$result = array_map($multipleMyArr, $myArr);

// echo $result;
var_dump($result);

$addr = [
    "street" => "Gang Puntadewa",
    "number" => "99",
    "City" => "Tawangmangu"
];

var_dump(array_keys($addr));
var_dump(array_values($addr));
