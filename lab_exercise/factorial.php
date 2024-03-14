<?
    # a program to find the factorial of a number using Functions

    function factorial($number) {
        if ($number == 0 || $number == 1) {
            return 1;
        }

        return $number * factorial($number - 1);
    }

    $number = rand(0, 10);
    echo "Factorial of $number is " . factorial($number) . "\n";
