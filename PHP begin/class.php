<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 17.02.2019
 * Time: 20:02
 */

class Human {

    public $firstName;
    public $lastName;

    public function getName() {
        return $this->firstName . ' '. $this->lastName;
        //return $firstName; //xato
    }

    public static function test($arg) {
        echo self::testTwo();
    }

    public static function testTwo()
    {
        return 1;
    }

}

$aziz = new Human;
$aziz->firstName = 'Aziz';
$aziz->lastName = 'Jumanazarov';

//echo $aziz->getName();
//echo gettype($aziz);
Human::test('my data');