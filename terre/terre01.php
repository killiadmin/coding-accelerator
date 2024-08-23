<?php

/**
 * Program using a loop that displays the alphabet in lowercase letters followed by a newline.
 *
 * @var string $rangeAlphabet Represents the range of alphabets.
 */

$rangeAlphabet = range('a','z');

foreach ($rangeAlphabet as $index => $letter) {
    $letterLower = strtolower($letter);
    echo($letterLower).PHP_EOL;
}

// run in terminal => php terre01.php
