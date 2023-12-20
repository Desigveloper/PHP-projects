<?php
    echo <<<_END
        <!DOCTYPE html>
        <html>
            <head>
                <title>PHP Form Upload</title>
            </head>
            <body>
                <form method="post" action="upload_form.php" enctype="multipart/form-data">
                    Select a JPG, GIF, PNG, or TIFF File:
                    <input type="file" name="filename" size="10"><br>
                    <input type="submit" value="Upload">
                </form>
    _END;
        if ($_FILES)
        {
            $name = $_FILES['filename']['name'];
            $name = strtolower(preg_replace("/[^A-Za-z0-9.]/", "", $name));
            
            switch ($_FILES['filename']['type'])
            {
                case 'image/jpeg':
                case 'image/pjpeg': //an alias (progressive jpeg)
                    $file_extension = 'jpg';
                    break; 
                case 'image/gif':
                    $file_extension = 'gif';
                    break;
                case 'image/png':
                    $file_extension = 'png';
                    break;
                case 'image/tiff':
                    $file_extension = 'tiff';
                    break;
                default:
                    $file_extension = '';
                    break;
            }
            if($file_extension)
            {
                $n = "image.$file_extension";
                move_uploaded_file($_FILES['filename']['tmp_name'], $n);
                echo "Upload image '$name' as '$n': " . "<br>" . "<img src='$n'>";
        
            }
            else
                echo "$name is not an accepted image file";
        }
        else
            echo "No image has been uploaded";

        echo "</body></html>";
?>