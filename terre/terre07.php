<?php

/**
 * Method returning the argument entered in reverse
 */

if ($argc > 1) {
    $str = $argv[1];

    if (strlen($str) <= 1) {
        echo("Don't you have more inspiration?" . PHP_EOL);
        return;
    }

    $strReversed = strrev($str);

    echo($strReversed . PHP_EOL);

    return;
}

echo('You are not using the correct syntax' . PHP_EOL);

// run in terminal => php terre07.php "Hello world"
// Response : dlrow olleH
