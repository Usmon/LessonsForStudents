<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 18.02.2019
 * Time: 20:03
 */

function baholash($students = [], $fan = 'Web') {
    $bahoAlo       = 86;
    $bahoYaxshi    = 71;
    $bahoQoniqarli = 55;
    $results = [];
    foreach ($students as $student) {
        $baholash = NULL;
        if($student['fan'] == $fan) {
            if ($student['baho'] >= $bahoAlo) {
                $baholash = 'A\'lo';
            }
            else if ($student['baho'] >= $bahoYaxshi) {
                $baholash = 'Yaxshi';
            }
            else if ($student['baho'] >= $bahoQoniqarli) {
                $baholash = 'Qoniqarli';
            }
            else {
                $baholash = 'Qoniqarsiz';
            }
            //Set data
            $results[] = [
                'name' => $student['ism'],
                'baho' => $student['baho'],
                'baholash' => $baholash
            ];
        }
    }

    return $results;
}

$students = [
    ['ism' => 'Akbar', 'baho' => 55, 'fan' => 'Web'],
    ['ism' => 'Aziz', 'baho' => 75, 'fan' => 'C++'],
    ['ism' => 'Muxtor', 'baho' => 45, 'fan' => 'Web']
];

var_dump( baholash($students, 'Web') );