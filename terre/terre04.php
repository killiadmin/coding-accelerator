<?php

/**
 * Number of command line arguments passed to the script.
 */

if ($argc = 1) {
    $argument = strlen($argv[1]);

    if ($argument > 1) {
        echo('You only need to enter one character' . PHP_EOL);
        return;
    }

    if (preg_match('/^[a-zA-Z]+$/', $argv[1])) {
        $rangeAlphabet = range($argv[1],'z');

        foreach ($rangeAlphabet as $index => $letter) {
            $letterLower = strtolower($letter);
            echo ($letterLower . PHP_EOL) ;
        }

        return ;
    }

    echo ('You must enter a letter of the alphabet' . PHP_EOL);

    return;
}

echo ('You must enter a letter of the alphabet in your argument' . PHP_EOL);

// run in terminal => php terre04.php w
