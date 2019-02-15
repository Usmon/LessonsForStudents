<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 15.02.2019
 * Time: 20:10
 */
//
//for($index = 1; $index<=5; $index) {
//    echo $index;
//    echo '<br>';
//}
//$whileIndex = 0;
//while($whileIndex < 5) {
//    echo $whileIndex;
//    echo '<br>';
//    $whileIndex++;
//}

$students = [
    'Aziz',
    'Akbar',
    'Jalol'
];

//foreach($students as $key => $student) {
//    echo 'Index: ' . $key;
//    echo '::';
//    echo 'Name: ' . $student;
//    echo '<br>';
//}

$posts = [
    0 => ['nomi' => 'Xabar 1', 'matn' => 'Xabar matni 1', 'sana' => '2019/02/20'],
    1 => ['nomi' => 'Xabar 2', 'matn' => 'Xabar matni 2', 'sana' => '2019/02/21'],
    2 => ['nomi' => 'Xabar 3', 'matn' => 'Xabar matni 3', 'sana' => '2019/02/23'],
];

//foreach ($posts as $post) {
//    echo '<h2>' . $post['nomi'] . '</h2>';
//    echo '<p>' . $post['matn'] . '</p>';
//    echo $post['sana'];
//    echo '<hr>';
//}

for ($index = 0; $index < count($posts); $index++) {
    echo '<h2>' . $posts[$index]['nomi'] . '</h2>';
    echo '<p>' . $posts[$index]['matn'] . '</p>';
    echo $posts[$index]['sana'];
    echo '<hr>';
}