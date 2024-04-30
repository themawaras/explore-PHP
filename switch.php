<?php

$grade = "C";

switch ($grade) {
    case "A":
        echo "Anda lulus dengan nilai terbaik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Anda gagal" . PHP_EOL;
}
