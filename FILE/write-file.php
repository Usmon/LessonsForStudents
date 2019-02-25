<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 25.02.2019
 * Time: 20:40
 */

$names = "John;Doe".PHP_EOL."Steve;Jobs";

file_put_contents('uploads/write_file.txt', $names);