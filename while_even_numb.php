<?php

$inp = readline("Input a number: ");
$numb = 1;
$result = 0;

while ($numb <= $inp) {
    if ($numb % 2 == 0) {
        $result = $result + $numb;
        // echo $result . PHP_EOL;
    }
    $numb++;
}

echo "The sum of even numbers out $inp is $result";
