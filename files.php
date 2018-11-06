<?php
$folder = 'uploads';

$files = scandir('uploads');

foreach ($files as $file){
    if($file[0] != '.' ){
        echo '<img width="300px" src="'.
            $folder. DIRECTORY_SEPARATOR .$file
            .'" />';
    }
}

