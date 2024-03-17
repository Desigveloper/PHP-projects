<?php
     // Using anaonymous function to find power of a number
     $product = function ($num, $_pow) {
        return pow($num, $_pow);
    };

    $number = readline("Enter number: ");
    $power = readline("Enter power: ");
    echo "$number pow $power is " . $product($number, $power) . "\n";