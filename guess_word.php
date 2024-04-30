<?php

$wordAnswer = "BANANA";
$guessWord = "";

do {
    $guessWord = readline("Type your guess word: ");

    if (strtoupper($guessWord) == $wordAnswer) {
        echo "Congratulation! {$guessWord} is the answer" . PHP_EOL;
        break;
    } else {
        echo "Guess again!" . PHP_EOL;
    }
} while (strtoupper($guessWord) != $wordAnswer);
