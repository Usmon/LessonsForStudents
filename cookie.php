<?php

setcookie('logged', 'logged_hash_string', time()+60*60*24);
//unset($_COOKIE['logged']);
//echo $_COOKIE['logged'];