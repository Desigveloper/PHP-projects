<?php
    if (file_exists("textfile2.txt")) {
        if (rename("textfile2.txt", "textfile2.new"))
            echo "File 'textfile2.txt' successfully move or renamed to textfile2.new\n";
        else
        echo "File couldn't be moved or renamed\n";
    }
    else
        echo "File 'textfile2.txt' does not exist\n";