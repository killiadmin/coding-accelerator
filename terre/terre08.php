<?php

/**
 * Returns the number of characters of the entered argument
 *
 * Prohibited function : strlen
 */

if ($argc === 2) {
    // My character counter
    $countString = 0;

    // My argument
    $str = $argv[1];

    //Check this not number
    if (preg_match('/^[+-]?\d*\.?\d+$/', $str)) {
        echo("We don't like numbers here" . PHP_EOL);
        return;
    }

    // We cut the chain
    $arrStr = str_split($str);

    // We loop on it
    foreach($arrStr as $index => $chrtr) {
        // We feed the meter if the key is not empty
        if (trim($chrtr) !== '') {
            $countString++;
        }
    }

    echo('Response : ' . $countString . PHP_EOL);
    return;
}

echo ('Put only one argument' . PHP_EOL);

// run in terminal => php terre08.php "Sayonara World"
// Response : 13
