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

echo $varName(8);

//echo orqagaQaytish();

//$name = 'Nosir';

//echo colored($name);


