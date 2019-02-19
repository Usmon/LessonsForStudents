<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 18.02.2019
 * Time: 20:18
 */
//Anonim funksiya
$myVariableFunction = function(){
    return 5;
};

//echo $myVariableFunction();

$myArray = [
    'myItem' => function($argName){
        if($argName > 0)
            return $argName;
        return 'not_found';
    }
];

//echo $myArray['myItem'](0);

$worker = [
    'name' => 'Aziz',
    'age' => 21,
    'isStudent' => true,
    'resume' => true
];

//echo array_key_exists('resume', $worker);

$students = [
    'Aziz',
    'Akbar',
    'Jalol',
    'Islom',
    'Muxtor',
    'Sarvar',
    'Shoxrux'
];
//var_dump($students);
//$studentsReverse = array_reverse($students);
//var_dump($studentsReverse);

//echo array_search('Shoxrux', $students);

//$myNumbers = [10, 40, 2, 9, 5];
//var_dump($myNumbers);
//sort($myNumbers);
//var_dump($myNumbers);

$myAnonim = function($arrayOne, $arrayTwo) {
    return array_merge($arrayOne, $arrayTwo);
};

var_dump($myAnonim([4,5,6,7], [9,50,60]));