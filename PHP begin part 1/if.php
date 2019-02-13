<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.02.2019
 * Time: 20:56
 */

$varA = 15;
$varB = 40;

if($varA == 15)
{
//    echo 'teng';
}
else
{
//    echo 'teng emas';
}

if($varA > $varB)
{
//    echo 'varA katta';
}
else
{
//    echo 'varB katta';
}

//OR <==> ||
//AND <==> &&
if($varA == 15 AND $varB != 40) //OR
{
    //echo 'shart bajarildi!';
}
else
{
    //echo 'shart mos emas';
}
//if(expression_one)
//{
//    //Code
//}
//else if(expression_two)
//{
//    //Code
//}
//else if (expression_n)
//{
//    //Code
//}
//else
//{
//    //Code
//}
$visible = true;
$count = 1;
if($count === $visible)
{
    //echo 'MOS';
}
else
{
    //echo 'MOS EMAS';
}
//Binary if
$uzgaruvchi = ($visible == true) ? 'TRUE - ROST' : 'FALSE - INKOR';
echo $uzgaruvchi;