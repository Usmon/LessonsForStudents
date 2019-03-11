<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 11.03.2019
 * Time: 21:04
 */

class Format {

    /**
     * Date format method
     * @param $date string
     * @param $format string
     * @return false|string
     */
    public static function dateFormat($date, $format = 'd/m/Y') {
        $new_date = date_create($date);
        $result = date_format($new_date, $format);
        return $result;
    }

}

$date = '2019-03-11';
echo Format::dateFormat($date, 'd.m.y');