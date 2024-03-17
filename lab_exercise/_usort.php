<?php
    // Anaonymous function with built-in ussort as a callback
    $arr = [89, 45, 5, 17, 100, 22, 109, 66, 88, 1, 74];

    usort($arr, function ($a, $b) {
        return $a > $b;
    });

    $i = 0;
    foreach($arr as $value) {
        if  ($i == count($arr) - 1)
            echo $value . "\n";
        else
            echo $value . " ";

        $i++;
    }