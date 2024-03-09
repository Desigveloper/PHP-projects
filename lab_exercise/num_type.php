<?php
    #a program to check whether a number is even or odd
    function numType() {
        $num = rand(0, 9999999);

        if ($num % 2 === 0) 
            echo "$num is Even\n";
        else
            echo "$num is Odd\n";
    }

    numType();