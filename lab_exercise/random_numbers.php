<?php
    /*
    a program that generates 1 million unique random numbers, sort the numbers,
    then output of unique and duplicate number and timestamps of time taken populate
    array to a file
    */

    $numbers = [];
    $unique = [];
    $duplicate = [];

    $fh = fopen("timestamp.txt", "w+");

    for ($i = 0; $i < 1000000; $i++) {
        $numbers[$i] = rand(0, 100000000);

        $dob = date_create();
        $fmt = date_format($dob, "d-M-Y H:i:s a");
        fwrite($fh, $fmt . "\n");
    }

    fclose($fh);

    sort($numbers);
    $j = 0;
    foreach($numbers as $number) {
        if ($j > 0 && $number != $numbers[$j - 1]) {
            $unique[$j] = $number;
        }
        else {
            $duplicate[$j] = $number;
        }
        $j++;
    }

     $fh = fopen('uniques.txt', 'w+');
     foreach($unique as $number)
     {
        fwrite($fh, $number . "\n");
     }
     fclose($fh);
    
     $fh = fopen('duplicates.txt', 'w+');
     foreach($duplicate as $number)
     {
        fwrite($fh, $number . "\n");
     }
     fclose($fh);

     echo "Unique: " . count($unique) . "\n";
     echo "Duplicate: " . count($duplicate) . "\n";