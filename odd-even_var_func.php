<?php

function oddDetect(int $value): string
{
    if ($value % 2 !== 0) {
        return $value . PHP_EOL;
    } else {
        return "";
    }
}

function evenDetect(int $value): string
{
    if ($value % 2 == 0) {
        return $value . PHP_EOL;
    } else {
        return "";
    }
}

function rangeNumb(int $min, int $max, string $func)
{
    $val = $min;
    while ($val <= $max) {
        $result = $func($val);
        echo $result;
        $val++;
    }
}

rangeNumb(1, 10, "oddDetect");
rangeNumb(1, 10, "evenDetect");


function sayHello(string $name, $filter)
{
    $finalGreet = $filter($name);
    echo "Hello to you $finalGreet" . PHP_EOL;
}

sayHello("TaMa", function (string $input): string {
    return strtoupper($input);
});

$firstName = "Budi";
$lastName = "Raharjo";

$greetBudi = function () use ($firstName, $lastName) {
    echo "Hello, $firstName $lastName" . PHP_EOL;
};

$greetBudi();
