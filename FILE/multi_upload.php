<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 21.02.2019
 * Time: 20:39
 */

if (isset($_FILES)) {
    $fayllar = $_FILES['fayllar'];
    foreach ($fayllar['error'] as $key => $fayl) {
        if ($fayl == 0) {
            $upload_dir = 'uploads';
            $fileName = uniqid() . '_' . $fayllar['name'][$key];
            $destination = $upload_dir.DIRECTORY_SEPARATOR.$fileName;
            move_uploaded_file($fayllar['tmp_name'][$key], $destination);
        }
    }
}
else
    echo 'Fayl kelmadi!';