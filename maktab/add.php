<?php
    include 'db.php';

    $connection->query('INSERT INTO oquvchilar(ism, familya, sinf_raqami, sinf_harfi) VALUES ("Harry", "Kane", 11, "D")');