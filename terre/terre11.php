<?php

/**
 * Returns an answer whether, depending on the argument, if it is a prime number
 **/

if ($argc === 2 && ctype_digit($argv[1])) {

    $argument = (int)$argv[1];

    if ($argument === 0 || $argument === 1) {
        echo ('No, ' . $argument . ' is not a prime number' . PHP_EOL);
        return;
    }

    $indexWhole = 2;
        while ($indexWhole < $argument) {
            if ($argument % $indexWhole === 0) {
                echo ('No, ' . $argument . ' is not a prime number' . PHP_EOL);
                return;
            }
            $indexWhole++;
        }
        echo ('Yes, ' . $argument . ' is a prime number' . PHP_EOL);

    return;
}

echo ('You must only enter one number in your argument' . PHP_EOL);

// run in terminal => php terre11.php 5
// Yes, 5 is a prime number
