<?php
function determineNumber($number)
    {
        if ($number == 0)
        {
            print "Number is $number and $number raise to any poer is $number\n";
        }
        else if ($number != 0 and $number % 2 == 0)
        {
            $square = $number ** 2;
            print "$number is even and $number square is: $square\n";
        }
        else if ($number != 0 and $number % 2 != 0)
        {
            $cube = $number ** 3;
            print "$number is odd and $number cube is: $cube\n";
        }
    }

    determineNumber(0);
    determineNumber(-2);
    determineNumber(-1);