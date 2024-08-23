<?php

/**
 * Variable representing the result of a computation or operation.
 *
 * @var mixed $result The result of the computation or operation.
 */

if ($argc === 3 && preg_match('/^[+-]?\d*\.?\d+$/', $argv[1]) && preg_match('/^[+-]?\d*\.?\d+$/', $argv[2])) {
    if ($argv[1] === '0' || $argv[2] === '0') {
        echo('Cannot divide by zero' . PHP_EOL);
        return;
    }

    if ($argv[1] < $argv[2]) {
        echo("Nein nein nein, it's over !" . PHP_EOL);
        return;
    }

    $result = $argv[1] / $argv[2];

    echo('Result : ' . round($result, 0, PHP_ROUND_HALF_DOWN) . PHP_EOL);

    $stay = fmod($argv[1], $argv[2]);

    echo('Stay : ' . $stay . PHP_EOL);

    return;
}

echo("Fatal error, you perished in the abyss" . PHP_EOL);

// run in terminal => php terre06.php 5 2
// Result : 2
// Stay : 1
