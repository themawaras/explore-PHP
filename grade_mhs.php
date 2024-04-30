<?php

$grade = 10;


if ($grade > 100 || $grade < 0) {
    echo "Error. Rentang nilai yang dimasukkan adalah 0-100.";
} else if ($grade >= 85) {
    echo "nilai anda A";
} else if ($grade >= 70) {
    echo "nilai anda B";
} else if ($grade >= 60) {
    echo "nilai anda C";
} else if ($grade >= 50) {
    echo "nilai anda D";
} else {
    echo "nilai anda E (gagal)";
}
