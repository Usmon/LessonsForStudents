<?php

function colored($name)
{
    $length = strlen($name);
    if($length > 0)
    {
        $colored_name = '';
        $colored_name .= '<span style="color: red">'.$name[0].'</span>';
        for($i = 1; $i<$length; $i++)
        {
            $colored_name .= $name[$i];
        }
        return $colored_name;
    }
    return $name;
}

function orqagaQaytish()
{
    return -1;
}

function def_function($name = 'kAMOL') //default name
{
    return $name;
}

$varName = function ($a){
    return $a+5;
};

//echo $varName(8);

//echo orqagaQaytish();

//$name = 'Nosir';

//echo colored($name);

/*
 * My Function - sample
 */
function myFunc() {
    return 90+2;
}

/**
 * Add function
 * @param integer $a
 * @param integer $b
 * @return mixed
 */
function add($a, $b)
{
    $var = $a+$b;
    return $var;
}

$myVar = myFunc();
//echo $myVar;
//echo add(4,5);
//echo colored('Sarvar');

$myArray = [1,3,4,5,6];
//echo count($myArray);
//echo count('myString');
//echo strlen('myString');
//var_dump($myArray);
$name = 'Sarvar Ganjaev';
$new_name = str_replace('Sarvar', '<span style="color:red">Sarvar</span>', $name);
//echo strtoupper($name);
//echo strtolower($name);
//echo strpos($name, 'Ganjaev');
