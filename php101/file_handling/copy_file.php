<?php
if (!copy("textfile.txt", "textfile2.txt")) echo "File 'textfile.txt' could not be copied\n";
else "File successfully copied\n";

/*
// Alternatively, if you want the program to exit when copying fails
    copy("textfile.txt", "textfile2.txt")
        or die("File 'textfile.txt' could not be copied");
    echo "File successfully copied";
*/