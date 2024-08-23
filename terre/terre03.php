<?php

/**
 * Represents the argument passed to a function or method.
 *
 * @var mixed $myArgument The value of the argument.
 */

if ($argc > 1) {

    $myArgument = $argv[1];

    $myArguments = explode(' ', $myArgument);

    foreach ($myArguments as $index => $argument) {
        echo($argument . PHP_EOL);
    }

    return;
}

$myArguments = 'You have not entered any arguments';

echo ($myArguments . PHP_EOL);


// run in terminal => php terre03.php "Hello my name is Killian"
