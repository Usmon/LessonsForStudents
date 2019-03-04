<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 04.03.2019
 * Time: 20:35
 */

class  MyClass {

    public $inClass;

    function test($name){
        echo 'Name: ' . $name;
    }

    function inClassEcho() {
        if (!empty($this->inClass))
            echo 'VALUE: ' . $this->inClass;
        else
            echo 'Qiymat yoq';
    }

}

$myVar = new MyClass();

$myVar->inClass = 'TEST VALUE';
//$myVar->test('Muxtor');
echo $myVar->inClassEcho();