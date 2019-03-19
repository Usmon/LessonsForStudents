<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 27.02.2019
 * Time: 15:35
 */
//include '_header.php';
//
////$_SESSION['user'] = 'Azizbek';
////echo $_SESSION['user'];
//
//$_SESSION['user_data'] = [
//    'id' => 101,
//    'login' => 'aziz07',
//    'full_name' => 'Azizbek Ibragimov',
//    'role' => 'admin'
//];


session_start();

$_SESSION['user_login'] = 'Muxtor'; //Set
unset($_SESSION['user_login']); //Delete
var_dump($_SESSION['user_login']);