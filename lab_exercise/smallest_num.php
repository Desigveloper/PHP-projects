<?php
    # a program to find the smaller of two numbers

    $num1 = rand(0, 1000000);
    $num2 = rand(0, 1000000);

    if ($num2 < $num1) {
        echo "Num2: " . $num2 . " -> Smallest\n";
        echo "Num1: " . $num1 . " -> Largest\n";
    }
    else if ($num2 > $num1) {
        echo "Num1: " . $num1 . " -> Smallest\n";
        echo "Num2: " . $num2 . " -> Largest\n";
    }
    else
        echo "equal numbers: " . $num1;