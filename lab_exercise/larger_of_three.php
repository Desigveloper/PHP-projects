<?php
    # a program to find the smallest of three numbers.
    $num1 = rand(0, 1000);
    $num2 = rand(0, 1000);
    $num3 = rand(0, 1000);

    if ($num1 > $num2) {
        if ($num1 > $num3) {
            $largest = $num1;
            echo "$num1 is the largest\n";
        } else {
            $largest = $num3;
            echo "$num3 is the largest\n";
        }
    } else {
        if ($num2 > $num3) {
            $largest = $num2;
            echo "$num2 is the largest\n";
        } else {
            $largest = $num3;
            echo "$num3 is the largest\n";
        }
    }

    echo "Numbers: $num1, $num2, $num3\n";

    // Writing output to a file
    $fh = fopen("largest.txt", "a+");
    $output = "$largest is the largest\n" . "Numbers: $num1, $num2, $num3\n";

    fwrite($fh, $output);
    fclose($fh);