<?php
include 'db_connection.php';

$id = $_GET['id'];
if(empty($id)) {
    echo 'ID YOQ'; exit();
}
else
{
    $query = $connection->query('DELETE FROM contacts WHERE id = '.$id);
    header('Location: index.php');
}