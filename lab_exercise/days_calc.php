<?php
  # a program to calculate the number of days between date of birth and current date
  
  $curr_month = 3;
  $curr_year = 2024;
  $days_of_curr_month = 12;
  $remaining_days_of_birth_month = 9;
  $birth_month = 12;
  $birth_year = 1991;
  $total_days = $days_of_curr_month + $remaining_days_of_birth_month;

  for (; $birth_year <= $curr_year; $birth_month++){
    if ($birth_month > 12){
      $birth_month = 1;
      ++$birth_year;
      $total_days += cal_days_in_month(CAL_GREGORIAN, $birth_month, $birth_year);
    }
    else {
      $total_days += cal_days_in_month(CAL_GREGORIAN, $birth_month, $birth_year);
    }

    if ($birth_year == $curr_year && $birth_month == $curr_month){
      break;
    }
}

echo $total_days . "\n";