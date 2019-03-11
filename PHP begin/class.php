<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 17.02.2019
 * Time: 20:02
 */

class Human {
    //public / private / protected
    public $firstName;
    public $lastName;

    public function getName() {
        return $this->firstName . ' '. $this->lastName;
        //return $firstName; //xato
    }

    public static function test($arg) {
        echo self::testTwo();
    }

    /**
     * Test Two function
     * @param $argument1 string
     * @param $count integer
     * @return string
     */
    public static function testTwo($argument1, $count)
    {
        //Code
        return $argument1;
    }

}

$aziz = new Human;
$aziz->firstName = 'Aziz';

$aziz->lastName = 'Jumanazarov';
//echo $aziz->firstName;
//echo $aziz->getName();
//echo gettype($aziz);
//Human::test('my data');
echo Human::testTwo('TESTing');