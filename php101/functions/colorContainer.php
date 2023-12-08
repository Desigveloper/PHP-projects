<?php
function displayColor($color)
{
    if (strtoupper($color) === "GREEN")
        print ucfirst(strtolower($color)) . ": There is a living beauty in Green nature\n";
    else if (strtoupper($color) === "BROWN")
        print ucfirst(strtolower($color)) . ": I love earth\n";
    else if (strtoupper($color) === "BLUE")
        print ucfirst(strtolower($color)) . ": The sky is beautiful\n";
    else if (strtoupper($color) === "YELLOW")
        print ucfirst(strtolower($color)) . ": I love sunset\n";
    else
        print ucfirst(strtolower($color)) . ": Selectd color is my favorite color\n";
}

// DisplayColor("gREen");
// diSPlayColor("bROWn");
// displayColor("blue");
// displayColor("yellow");
// displayColor("red");
