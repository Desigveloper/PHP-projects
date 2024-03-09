<?php
    #Write a program to decide whether a student has passed an exam with a pass mark of 57

    $score = rand(0, 101);

    if ($score >= 57)
        echo "Score: $score -> Pass\n";
    else
        echo "Score: $score -> Fail\n";