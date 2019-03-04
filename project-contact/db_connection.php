<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 04.03.2019
 * Time: 20:24
 */

$dsn = 'mysql:host=localhost;dbname=project_contact';

$db_user = 'root';
$db_password = '';

$connection = new PDO($dsn, $db_user, $db_password);

//$query = $connection->query(
//    'INSERT INTO contacts (first_name, last_name, phone) VALUES ("John", "Doe", "+87987989987")'
//);

//$query = $connection->prepare(
//    'INSERT INTO contacts (first_name, last_name, phone) VALUES (?, ?, ?)'
//);
//
//$query->execute(['Maxmud', 'Shokirov', '+97979797797']);