<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 25.02.2019
 * Time: 20:31
 */

$file = 'uploads'.DIRECTORY_SEPARATOR.'test.txt';
$get_file = file_get_contents($file);
$rows = explode(PHP_EOL, $get_file);
//var_dump($rows);
foreach ($rows as $item) {
    $contact = explode(';', $item);
    var_dump($contact);
}