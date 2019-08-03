<?php

    $myArray = [5, 6, 7, 8, 30, 500];
    $myArray2 = [25, 6, 8, 7];
    array_push($myArray, 105);
    array_unshift($myArray, 505);
//    $rand_index = array_rand($myArray);
//    array_pop($myArray);
//    echo $myArray[$rand_index];
//    echo $myArray[$rand_index];
//    var_dump(array_diff($myArray, $myArray2));
//    var_dump(array_chunk($myArray, 2));
//    var_dump(array_reverse($myArray));
//    var_dump( array_search(500, $myArray) );
//    var_dump( array_sum($myArray) );
//    var_dump($myArray);
//var_dump($myArray);
//echo $myArray[$rand_index];
$string_elements = implode(',', $myArray);
//var_dump($string_elements);
$string_to_array = explode(',', $string_elements);
var_dump($string_to_array);