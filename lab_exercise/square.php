<?php
    # A program that takes a number from  the user and return the square of it

    function square($number) {
        return $number ** 2;
    }

    $number = readline("Enter number: ");
    echo "The square of $number is " . square($number) . "\n";