<?php

/**
 * Returns the middle value according to the 3 arguments given
 *
 * Prohibited function : sort()
 **/

if ($argc === 4 && ctype_digit($argv[1]) && ctype_digit($argv[2]) && ctype_digit($argv[3])) {

    $first = (int)$argv[1];
    $second = (int)$argv[2];
    $third = (int)$argv[3];

    if ($first === $second || $second === $third || $first === $third) {
        echo "Error: Numbers must be distinct." . PHP_EOL;
        return;
    }

    if (($first > $second && $first < $third) || ($first > $third && $first < $second)) {
        $result = $first;
    } elseif (($second > $first && $second < $third) || ($second > $third && $second < $first)) {
        $result = $second;
    } else {
        $result = $third;
    }

    echo('Result : ' . $result . PHP_EOL);
    return;
}

echo('You only have to enter 3 numbers, smart guy' . PHP_EOL);

// run in terminal => php terre14.php 11 40 34
// Result : 34
