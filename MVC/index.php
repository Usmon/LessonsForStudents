<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 20:27
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Config
include "application/config/main.php";
//Core classes
include "core/Model.php";
include "core/View.php";
include "core/Controller.php";
include "core/helpers/Format.php";
//Child classes
include 'application/models/NewsModel.php';
include "application/controllers/SiteController.php";

$route = $_GET['route'];
$site = new SiteController('site');
if ($route == 'home' || !isset($route))
{
    $site->home();
}
if ($route == 'about')
{
    $site->about();
}
if ($route == 'contact')
{
    $site->contact();
}
if ($route == 'news')
{
    $site->news();
}