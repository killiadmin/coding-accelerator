<?php

/**
 * Returns a time displayed in 12h format while the argument is in 24h format
 **/

if ($argc === 2 && preg_match("/^(2[0-3]|[01][0-9]):[0-5][0-9]$/", $argv[1])) {

    $dateConvert = date("h:i a", strtotime($argv[1]));

    echo('Result : ' . $dateConvert . PHP_EOL);
    return;
}

echo('The syntax of your argument must be in 24h format - 23:40' . PHP_EOL);

// run in terminal => php terre12.php 23:40
// Result : 11:40PM
