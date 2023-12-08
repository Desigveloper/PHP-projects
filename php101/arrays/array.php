<?php
    //$paper[] = "Copier";
    //$paper[] = "Inkjet";
    $paper = ["Copier","Inkjet", "Laser", "Photo"];
    $paperUpdated = &$paper; //& reference operator
    $paperUpdated[2] = "Hp";
    $paper[] = "Laser";

    //Assosiative identifier Array with key => value pair
    $newPaper = [
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper",
        'hp' => "Hp Printer"
    ];

    print_r($newPaper);
    echo "\n";
    echo "$newPaper[inkjet]\n";
