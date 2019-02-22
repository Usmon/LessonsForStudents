<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 21.02.2019
 * Time: 20:27
 */

//Classic function
function testFunc() {
    //code
    return;
}

$userIsWorker = function($yosh){
    if ($yosh >= 18) {
        return true;
    }

    return false;
};

$userName = 'John Doe';
$userAge = 20;

$worker = $userIsWorker($userAge);

var_dump($worker);



