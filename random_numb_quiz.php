<?php

$minValue = 1;
$maxValue = 100;
$randomNumber = rand($minValue, $maxValue);


do {
    $input = readline("input your guess number: ");
    if ($input > $maxValue) {
        echo "Only input a number between $minValue and $maxValue!" . PHP_EOL;
    } else if ($input < $randomNumber) {
        echo "Your number: $input is less than the answer" . PHP_EOL;
    } else if ($input > $randomNumber) {
        echo "Your number: $input is bigger than the answer" . PHP_EOL;
    } else {
        echo "Congratulation! Your guess number: $input is correct!" . PHP_EOL;
        // break;
    }
} while ($input != $randomNumber);
