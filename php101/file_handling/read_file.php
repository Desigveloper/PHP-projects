<?php
$fh = fopen("textfile.txt", "r") // Parameter 'r+' opens the file for read and write, or return FALSE if not existing
    or die("File does not exist or you lack permssion to open the file");

$line = fgets($fh); // Single line
$multi_line = fread($fh, 100); //Multi line read where second param is number of characters to read
fclose($fh);

echo "With fget:\n";
echo $line . "\n";

echo "With fread:\n";
echo $multi_line . "\n";
