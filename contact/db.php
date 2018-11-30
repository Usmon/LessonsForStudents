<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'contact_db';

    $connection = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $password);

