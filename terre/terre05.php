<?php

/**
 * Represents the number of command line arguments passed to the script.
 *
 */

if ($argc = 1) {
    if (preg_match('/^[+-]?\d*\.?\d+$/', $argv[1])) {

        $numberToCheck = $argv[1];

        if ($numberToCheck % 2 === 0) {
            echo("It's even" . PHP_EOL);
            return;
        }

        echo("It's odd" . PHP_EOL);
        return;
    }

    echo("You won't get tired of turning me upside down" . PHP_EOL);

    return;
}

echo("You won't get tired of turning me upside down" . PHP_EOL);

// run in terminal => php terre05.php 17