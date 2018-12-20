<?php

    $name = 'Lorem ipsum dolor sit.';

    $splitted_data = explode(' ', $name);
    var_dump($splitted_data);

    $array_string = ['Ot', 'Baliq', 'Tuya', 'Mushuk'];
    $array_string = ['It', 'Laylak', 'Kabutar'];

    echo implode(', ', $array_string);

    echo substr($name, 0, 9);

    echo substr_replace($name, 'new string', 5, 3);
    $replaced = str_replace(' ', '', $name);
    echo strlen($replaced);