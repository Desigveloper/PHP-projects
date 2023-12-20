<?php
    echo !unlink("textfile2.new") ? "Error: File 'textfile2.new' could not be deleted\n" :
        "Success: File 'textfile2.new' successfully deleted\n";