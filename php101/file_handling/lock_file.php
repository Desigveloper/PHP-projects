<?php
    $fh = fopen("textfile.txt", "r+") or die("File couldn't be opened\n");
    $text = file_get_contents("textfile.txt");

    if (flock($fh, LOCK_EX))
    {
        fseek($fh, 0, SEEK_END);
        fwrite($fh, $text);
        flock($fh, LOCK_UN);
    }
    fclose($fh);
    echo "File 'textfile.txt' successfully locked\n";