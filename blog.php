<?php

$file_posts = fopen('posts.csv', 'r');

/**
 * 0 Title
 * 1 Date
 * 2 Picture
 * 3 Content
 * */

while($article = fgetcsv($file_posts, 50000, ';', '\n')){
    echo $article[0];
    echo '<br>';
    echo $article[1];
    echo '<br>';
    echo '<img src="'.$article[2].'" />';
    echo '<p>'.substr($article[3], 0, 300).'...</p>';
    echo '<a href="#">Batafsil</a>';
    echo '<hr>';
}

?>