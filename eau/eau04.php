<?php

/**
 * Calculates the Fibonacci suite.
 *
 * @param int $nbArguments The number of arguments.
 * @param array $argument The arguments.
 *
 * @return void
 */
function fibonacciSuite($nbArguments, $argument)
{
    if ($nbArguments == 2 && is_numeric($argument[1])) {
        $backNb = 0;
        $currentNb = 1;

        for ($i = 2; $i <= $argument[1]; $i++) {
            $tempNb = $currentNb;
            $currentNb = $currentNb + $backNb;
            $backNb = $tempNb;
        }

        echo($currentNb);

        return;
    }

       echo('Your argument is not correct');
}

echo ('Response : ');

fibonacciSuite($argc, $argv);

echo '\n';

// run in terminal => php eau04.php 9
// Response : 34
