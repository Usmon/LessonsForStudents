<?php
session_start();
//Set constant login
const LOGIN = 'root';
const PASSWORD = '123';
//Get login and password
$login = $_POST['login'];
$password = $_POST['password'];
//Check Login
if($login == LOGIN && $password == PASSWORD)
{
    $_SESSION['user'] = LOGIN;
    header('Location: index.php?message=Saytga kirdingiz!');
}
else
{
    header('Location: index.php?message=Login parol xato');
}