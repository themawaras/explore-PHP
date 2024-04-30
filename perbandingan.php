<?php

$a = 10;
$b = "10";

var_dump($a == $b); // true . karena PHP bisa merubah-rubah tipe data lalu membandingkannya.
var_dump($a === $b); // false . karena walau value 'sama' tapi tipe data berbeda
