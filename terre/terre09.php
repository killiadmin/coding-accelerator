<?php

/**
 * Returns the power of a number entered
 *
 * Prohibited function : pow
 */

if ($argc === 3 && preg_match('/^[+-]?\d*\.?\d+$/', $argv[1]) && preg_match('/^[+-]?\d*\.?\d+$/', $argv[2])) {
    if ($argv[1] === '0' || $argv[2] === '0') {
        echo("You don't have anything better to offer" . PHP_EOL);
        return;
    }

    $result = $argv[1];

    for ($i = 1; $i < $argv[2]; $i++) {
        $result *= $argv[1];
    }

    echo('Result : ' . $result . PHP_EOL);

    return;
}

echo("You only need two numbers" . PHP_EOL);

// run in terminal => php terre09.php 2 3
// Result : 8
