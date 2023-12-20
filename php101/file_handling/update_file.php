<?php
    $fh = fopen("textfile.txt", "r+") 
        or die("File could not be opened\n");

    //$text = fgets($fh); // Reads text in file up to first line
    $new_lines = <<< _END
    
    Line 6
    Line 7
    Line 8
    _END;

    fseek($fh, 1, SEEK_END);
    fwrite($fh, $new_lines);
    fclose($fh);

    echo "File 'textfile.txt' successfully updated\n";