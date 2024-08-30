<?php

/**
 * Create a program that displays all the different two number combinations between 00 and 99 in ascending order
 *
 * @return void
 */
function generateCombinations()
{
    for ($i = 0; $i <= 98; $i++) {
        for ($j = $i + 1; $j <= 99; $j++) {

            echo str_pad($i, 2, '0', STR_PAD_LEFT) . ' ' . str_pad($j, 2, '0', STR_PAD_LEFT);

            if ($i !== 98 || $j !== 99) {
                echo ', ';
            }
        }
    }
}

echo 'Response : ';

generateCombinations();

echo "\n";

// run in terminal => php eau02.php
// Response : 00 01, 00 02, 00 03, 00 04, ... , 00 99, 01 02, ... , 97 99, 98 99
