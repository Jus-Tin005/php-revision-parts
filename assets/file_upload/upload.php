<?php

print_r($_FILES);

/*
    Array ( [photo] => Array ( [name] => 1(1).jpg [type] => image/jpeg [tmp_name] => C:\xampp\tmp\phpA606.tmp [error] => 0 [size] => 26485 ) )

    img type = MIME Type
*/

$name = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];

# move_uploaded_file(current filename,directory name that want to save);
# move_uploaded_file(string $filename,string $destination);

move_uploaded_file($tmp,$name);


