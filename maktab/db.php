<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'maktab';

$connection = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $password);

