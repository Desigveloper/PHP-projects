<?php
    $names = fix_names("William", "henry", "gaTEs");
    echo $names[0] . " " . $names[1] . " " . $names[2];

    function fix_names($name1, $name2, $name3)
    {
        $name1 = ucfirst(strtolower($name1));
        $name2 = ucfirst(strtolower($name2));
        $name3 = ucfirst(strtolower($name3));

        return [$name1, $name2, $name3];
    }