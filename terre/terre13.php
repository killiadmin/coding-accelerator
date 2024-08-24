<?php

/**
 * Returns a time displayed in 24h format while the argument is in 12h format
 **/

if ($argc === 2 && preg_match('/^(0?[1-9]|1[0-2]):[0-5][0-9](AM|PM)$/', $argv[1])) {

    $dateConvert = date("H:i", strtotime($argv[1]));

    echo('Result : ' . $dateConvert . PHP_EOL);
    return;
}

echo('The syntax of your argument must be in 12h format - 11:40PM' . PHP_EOL);

// run in terminal => php terre13.php 11:40PM
// Result : 23:40
