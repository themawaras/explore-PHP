<?php

function foo()
{
    echo "foo" . PHP_EOL;
}

function bar()
{
    echo "bar" . PHP_EOL;
};

$footer = "foo";
$barr = "bar";

$footer();
$barr();
