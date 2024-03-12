<?php
    # a program that generates 1 billion unique random numbers and output to a file

    $numbers = [];
    $unique = [];
    $duplicate = [];

    for ($i = 0; $i < 1000000; $i++) {
        $numbers[$i] = rand(0, 100000000);  
    }

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
     foreach($unique as $number) {
            
             fwrite($fh, $number . "\n");
     }
     fclose($fh);
    
     $fh = fopen('duplicates.txt', 'w+');
     foreach($duplicate as $number) {
            
             fwrite($fh, $number . "\n");
     }
     fclose($fh);

     echo "Unique: " . count($unique) . "\n";
     echo "Duplicate: " . count($duplicate) . "\n";