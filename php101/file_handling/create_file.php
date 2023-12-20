<?php
    $fh = fopen("textfile.txt", "w") //Parameter 'w+' opens the file for writing only and create if not existing
        or die("Unable to open or create a file!");

    $text = <<<_END
    Line 1
    Line 2
    Line 3
    Line 4
    Line 5
    _END;

    fwrite($fh, $text)
        or die("Couldn't write to file");
    fclose($fh);

    echo "File 'textfile.txt' written successfully\n";
?>