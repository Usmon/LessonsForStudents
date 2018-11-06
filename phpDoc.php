<?php

    /**
     * My Function
     * @param integer $input
     * @param integer $inputSecond
     * @return integer $result
     * */
    function myFunction($input, $inputSecond){
        $result = $input;

        return $result;
    }

//    $myArray = [
//        15,
//        40,
//        46,
//        67
//    ];
//
//    foreach ($myArray as $value){
//        echo $value;
//        echo '<br>';
//    }

//    $arrayB = [
//        'first' => 1000,
//        'last' => 65000
//    ];
//    $arrayB['demo'] = 800;
//
//    echo (array_key_exists('demo', $arrayB)) ? $arrayB['demo'] : '';

    $text = 'Vlad Vasilovich Demirov';
    echo $text;
    echo "\n";
    $splitName = explode(' ', $text);
    var_dump( implode(',- ', $splitName) );
//    var_dump($splitName);

?>