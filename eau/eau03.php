<?php

/**
 * Reverses and prints the given arguments in reverse order.
 *
 * @param int $nbArguments The number of arguments.
 * @param array $arguments The array of arguments to be reversed.
 *
 * @return void
 */
function argumentsUpsideDown ($nbArguments, $arguments)
{
    if ($nbArguments > 1) {

        $reversedArguments = array_reverse($arguments);

        foreach ($reversedArguments as $index => $argument) {
            echo "$argument\n";
        }

        return;
    }

    echo('No argument to take into account, too bad' . PHP_EOL);
}

$nbArguments = $argc;
$arguments = array_slice($argv, 1);

argumentsUpsideDown($nbArguments, $arguments);

// run in terminal => php eau03.php "Hi" "everybody"
// everybody
// Hi
