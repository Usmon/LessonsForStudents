<?php
    include 'db.php';

    $list = $connection->query('SELECT * FROM oquvchilar')->fetchAll();
    var_dump($list);