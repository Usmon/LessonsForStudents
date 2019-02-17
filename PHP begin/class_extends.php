<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 17.02.2019
 * Time: 20:19
 */

class Chevrolet {

    public $name = 'Chevrolet Cars';

    protected function drive() {
        //code
        return 1;
    }

}

class Malibu extends Chevrolet {

    public function getDrive(){
        return $this->drive();
    }
    public function businessClass() {
        return true;
    }

}

$myMalibu = new Malibu();

echo $myMalibu->getDrive();