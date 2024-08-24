<?php

/**
 * Returns the square root of the number entered as argument
 *
 * Prohibited function : sqrt()
 */

if ($argc = 1) {

    $argument = $argv[1];

    if (ctype_digit($argument) && $argument >= '0') {

        $result = 1;
        while ($argument > $result) {
            $argument = ($argument + $result) / 2;
            $result = $argv[1] / $argument;
        }

        echo("Result: " . $result . PHP_EOL);

        return;
    }

    echo('Your calculation is strange' . PHP_EOL);

    return;
}

echo('You must only enter one number in your arguments' . PHP_EOL);

// run in terminal => php terre10.php 9
// Result : 3
