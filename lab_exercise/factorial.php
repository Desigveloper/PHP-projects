<?
    # a program to find the factorial of a positive number using Functions

    function factorial($number) {
        if ($number < 0) {
            echo "Invalid numbers. Only positive numbers 0 - 50 allowed\n";
            return null;
        }
        else if ($number > 50) {
            echo "Number too big. Only numbers 0 - 50 allowed\n";
            return null;
        }
        elseif(ctype_alpha($number)) {
            echo "Invalid characters. Only numbers 0 - 50 allowed\n";
            return null;
        }
        else if ($number == 0 || $number == 1) {
            return 1;
        }

        return $number * factorial($number - 1);
    }

    $number = readline("Enter number(0 - 50): ");

    if (factorial($number))
        echo "Factorial of $number is " . factorial($number) . "\n";
