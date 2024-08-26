<?php
    // var_dump($_FILES['image']);

    // var_dump($_FILES['image']['name']);

    // var_dump($_FILES['image']['size']);

    $fileName = basename($_FILES['image']['name']);
    $fileTemp = $_FILES['image']['tmp_name'];


    if($_FILES['image']['size'] > 500000){
        echo '⛔ | Error, Your File Is Bigger Than 500KB';
    }
    else{
        echo '✔️ | File Uploaded';
        move_uploaded_file($fileTemp , "images/" . $fileName);
    }

?>