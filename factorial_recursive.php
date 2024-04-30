<?php

function factorialRecursive(int $val): int
{
    if ($val == 1) {
        return 1;
    } else {
        return $val * factorialRecursive($val - 1);
    }
}

var_dump(factorialRecursive(5));
