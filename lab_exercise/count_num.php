<?php
    # a program to count the number of digits in a number

    $max = rand(10, 1000);

    echo "Limit: $max\n";

    for ($i = 0; $i <= $max; $i++) {
        if ($max > 50 && $max <= 100)
        {
            if ($i % 2 == 0) {
                echo $i . "\n";
            }
        }
        else if ($max > 100 && $max <= 150) {
            if ($i % 3 == 0) {
                echo $i . "\n";
            }
        }
        else if ($max > 150 && $max <= 300) {
            if ($i % 4 == 0) {
                echo $i . "\n";
            }
        }
        else if ($max > 300 && $max <= 400) {
            if ($i % 5 == 0) {
                echo $i . "\n";
            }
        }
        else if ($max > 400 && $max <= 500) {
            if ($i % 10 == 0) {
                echo $i . "\n";
            }
        }
        else if ($max > 500 && $max <= 700) {
            if ($i % 50 == 0) {
                echo $i . "\n";
            }
        }
        else if ($max > 700 && $max <= 1000) {
            if ($i % 100 == 0) {
                echo $i . "\n";
            }
        }
        else 
            echo $i . "\n";
    }