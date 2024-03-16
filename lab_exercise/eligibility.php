<?php
    # a program to check whether a person is eligible to vote or not

    $age = readline("Enter age: ");

   function checkEligibility($age) {
    if ($age >= 18) {
        $mindState = readline("Have sound mind TRUE/FALSE: ");
    
        if (strtolower($mindState) === "true")
        $soundMind = true;
        else
        $soundMind = false;

        if ($soundMind)
            return "You are $age " . "and sound minded. Eligible to vote\n";
        else
            return "Your age is $age is " . "but not sound minded. Not eligible to vote\n";
    }

    return "You are $age. " . "Minors are not eligible to vote\n";
   }

$eligibily = checkEligibility($age);
echo $eligibily;