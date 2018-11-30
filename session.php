<?php
session_start();

$_SESSION['user'] = 'Aziz';

echo $_SESSION['user'];