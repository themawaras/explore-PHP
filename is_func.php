<?php

$grade = [];

$checkDataType = is_integer($grade); // is_integer function

var_dump($checkDataType);

if (!$checkDataType) {
    echo "Error! Only accept an integer input." . PHP_EOL;
} else if ($grade > 100 || $grade < 0) {
    echo "Error! Only accept range number 0-100." . PHP_EOL;
} else if ($grade >= 85) {
    echo "nilai anda A" . PHP_EOL;
} else if ($grade >= 70) {
    echo "nilai anda B" . PHP_EOL;
} else if ($grade >= 60) {
    echo "nilai anda C" . PHP_EOL;
} else if ($grade >= 50) {
    echo "nilai anda D" . PHP_EOL;
} else {
    echo "nilai anda E (gagal)" . PHP_EOL;
}
