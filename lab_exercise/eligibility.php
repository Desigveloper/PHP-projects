<?php
    # a program to check whether a person is eligible to vote or not

    $age = rand(12, 120);
    $mind_state = rand(0, 2);
    
    if ($mind_state == 1)
        $sound_mind = true;
    else
        $sound_mind = false;

    echo "your age is $age\n";

    if ($age >= 18) {
        if ($sound_mind)
            echo "Sound minded, eligible to vote\n";
        else
            echo "But not sound minded, not eligible to vote\n";
    } else {
        echo "Minor, not eligible to vote\n";
    }