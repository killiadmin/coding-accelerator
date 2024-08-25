<?php

/**
 * Returns a response if the arguments are sorted or not
 *
 * Prohibited function : sort()
 **/

if ($argc > 2) {

    $arguments = array_slice($argv, 1);

    foreach ($arguments as $argument) {
        if (!is_numeric($argument)) {
            echo "All arguments must be numeric" . PHP_EOL;
            return;
        }
    }

    $keyComparison = 0;

    foreach ($arguments as $key => $argument) {
        if (!is_numeric($argument)) {
            echo "All arguments must be numeric" . PHP_EOL;
            return;
        }

        if ((int)$keyComparison !== 0 && $argument < $keyComparison) {
            echo('The list is not sorted' . PHP_EOL);
            return;
        } else {
            $keyComparison = $argument;
        }

        if ((int)$keyComparison === 0) {
            $keyComparison = $argument;
        }
    }

    echo('The list is well sorted' . PHP_EOL);
    return;
}

echo('You must enter at least 2 arguments to be able to compare them' . PHP_EOL);

// run in terminal => php terre15.php 3 5 8
// The list is well sorted
