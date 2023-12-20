<?php
include_once "create_file.php";

if (file_exists("textfile.txt")) echo "File exists";
else echo "File does not exist";
?>