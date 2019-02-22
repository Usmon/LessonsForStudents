<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 22.02.2019
 * Time: 20:15
 */

$file = 'files/fon.uz_2852875.jpg';

var_dump(file_exists($file));
if(file_exists($file)){
    echo '<img width="300px" src="'.$file.'">';
}

$files = scandir('files');
var_dump($files); exit;
foreach ($files as $file){
    if($file[0] != '.'){
        echo $file;
        echo '<BR>';
    }
}
$dirName = 'text_files';
if (!file_exists($dirName)) {
    mkdir($dirName); //Make Dir
}

$file_name = 'text_files/test.txt';
$file = fopen($file_name, 'w'); //r - read o`qish uchun, w - write yozish uchun
fwrite($file, "Islom, Sarvar, Muxtor 2\nNew line TEST");
fclose($file);

$file_name = 'text_files/code.php';
$file = fopen($file_name, 'w'); //r - read o`qish uchun, w - write yozish uchun
fwrite($file, "<?php echo 'My String name PHP'; ?>");
fclose($file);