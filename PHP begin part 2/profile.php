<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 27.02.2019
 * Time: 15:41
 */
include 'header.php';

//echo $_SESSION['user'] . ' - In other page';
echo '<h1>'.$project_name.'</h1>';
if (isset($_SESSION['user_data'])) {
    echo 'Siz tizimga kirgansiz!';
}
else {
    echo 'Siz tizimga kirmagansiz, login qiling!';
}