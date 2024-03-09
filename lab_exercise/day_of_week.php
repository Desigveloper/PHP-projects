<?php
    # a program to check the day of a week

   function checkDay(){
    $day = rand(1, 8);

    switch($day) {
        case 1: echo "Sunday\n";
            break;
        case 2: echo "Monday\n";
            break;
        case 3: echo "Tuesday\n";
            break;
        case 4: echo "Wednesday\n";
            break;
        case 5: echo "Thursday\n";
            break;
        case 6: echo "Friday\n";
            break;
        case 7: echo "Saturday\n";
            break;
        default: echo "Invalid day\n";
    }
   }

   checkDay();