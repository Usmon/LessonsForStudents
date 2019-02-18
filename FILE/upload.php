<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 18.02.2019
 * Time: 21:02
 */
//Global variables
//$_FILES;
//$_GET;
//$_POST;

if($_FILES['picture']) {
    $picture = $_FILES['picture'];
    $upload_dir = 'uploads';
    $fileName = uniqid() . '_' . $picture['name'];
    //Validate type file
    if($picture['type'] == 'image/jpeg') {
        move_uploaded_file($picture['tmp_name'], $upload_dir.DIRECTORY_SEPARATOR.$fileName);
    }
    else {
        echo 'Fayl faqat JPG rasm format bo`lishi kerak!';
    }
}
else {
    echo 'Fayl kelmadi';
}