<?php

/**
 * Generates all possible combinations of three numbers from 0 to 9,
 *
 * @return void
 */
function generateCombinations()
{
    //First number
    for ($first = 0; $first <= 7; $first++) {
        //Seconde number
        for ($second = $first + 1; $second <= 8; $second++) {
            // Third number
            for ($third = $second + 1; $third <= 9; $third++) {
                echo $first . $second . $third . ", ";
            }
        }
    }
}

generateCombinations();

// run in terminal => php eau01.php
// Response : 012, 013, 014, 015, 016, 017, 018, 019, 023, 024, ... ,789