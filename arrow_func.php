<?php

$firstChar = "beautiful";
$secondChar = "girl";

$combine = fn () => "$firstChar $secondChar" . PHP_EOL; // or => $firstChar . " " . $secondChar . PHP_EOL;

echo $combine();

$firstNum = 21;
$secondNum = 34;

$sum = fn () => $firstNum + $secondNum . PHP_EOL;

echo $sum();
