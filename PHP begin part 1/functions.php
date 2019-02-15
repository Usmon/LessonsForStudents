<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 15.02.2019
 * Time: 20:32
 */

function testFunction() {
    return 'TEST ME I am Function';
}

function testProcedure() {
    echo 'TEST ME I am Procedure';
}

//echo testFunction();
//testProcedure();

function nameUnion($first_name, $last_name = NULL) {
    return $first_name .' '. $last_name;
}

//echo nameUnion('Johnatan', 'Doe');

function baholash($students = [], $fan = 'Web') {
    $bahoAlo       = 86;
    $bahoYaxshi    = 71;
    $bahoQoniqarli = 55;
    $results = [];
    foreach ($students as $student) {
        if($student['fan'] == $fan) {
            if ($student['baho'] >= $bahoAlo) {
                $results[] = [
                    'name' => $student['ism'],
                    'baho' => $student['baho'],
                    'baholash' => 'A`lo'
                ];
            }
            else if ($student['baho'] >= $bahoYaxshi) {
                $results[] = [
                    'name' => $student['ism'],
                    'baho' => $student['baho'],
                    'baholash' => 'Yaxshi'
                ];
            }
            else if ($student['baho'] >= $bahoQoniqarli) {
                $results[] = [
                    'name' => $student['ism'],
                    'baho' => $student['baho'],
                    'baholash' => 'Qoniqarli'
                ];
            }
            else {
                $results[] = [
                    'name' => $student['ism'],
                    'baho' => $student['baho'],
                    'baholash' => 'Qoniqarsiz'
                ];
            }
        }
    }

    return $results;
}

$students = [
    ['ism' => 'Akbar', 'baho' => 55, 'fan' => 'Web'],
    ['ism' => 'Aziz', 'baho' => 75, 'fan' => 'C++'],
    ['ism' => 'Muxtor', 'baho' => 45, 'fan' => 'Web']
];

//var_dump( baholash($students, 'C++') );
//$kerakliFan = 'Web';
//$baholar = baholash($students, $kerakliFan);
//echo '<h2>'. $kerakliFan .'</h2>';
//echo '<table border="1">';
//echo '<tr><td>Ism</td><td>Baho</td><td>Baholash</td></tr>';
//foreach($baholar as $baho) {
//    echo '<tr>';
//    echo '<td>' . $baho['name'] . '</td>';
//    echo '<td>' . $baho['baho'] . '</td>';
//    echo '<td>' . $baho['baholash'] . '</td>';
//    echo '</tr>';
//}
//echo '</table>';

//echo count($students);
//echo md5('name');
//echo time();
$name = 100;
//echo isset($name);
//echo $name;
//unset($name);
//echo $name;

$talabalar = [
    'Aziz',
    'Akbar',
    'Jalol'
];

//$stringNames = 'Aziz,Muxtor,Jahongir';
//$talabalar = explode(',', $stringNames);
//var_dump($talabalar);

//echo implode(',', $talabalar);

//echo str_replace(':name', 'Jahongir', 'Assalom alaykum :name Xat yuborildi!');

//echo strlen('Assalom alaykum :name Xat yuborildi!');

echo strtoupper('aaaaaaaa');
echo strtolower('GGGGGGGGGGGGG');