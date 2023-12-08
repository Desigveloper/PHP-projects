<?php
    include_once "array.php";

    //Regualr for loop with array
    for ($i = 0; $i < 5; $i++)
    {
        echo "$i: Paper = $paper[$i] \n\t Paper Updated = $paperUpdated[$i]\n";

    }

        echo "\n";
    //Foreach ... as loop
    foreach($paperUpdated as $item)
    {
        echo "$item\n";
    }

    echo "\n";
    $j = 0;
    foreach($newPaper as $item=>$description)
    {
        echo "$j: $item - $description\n";
        $j++;
    }

