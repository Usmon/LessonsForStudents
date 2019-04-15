<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 20:27
 */
session_start();
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//Config
include "vendor/autoload.php";
include "application/config/main.php";
//Core classes
include "core/Model.php";
include "core/View.php";
include "core/Controller.php";
include "core/helpers/Format.php";
//Child classes
include 'application/models/NewsModel.php';
include 'application/models/AdminModel.php';
include "application/controllers/SiteController.php";
include "application/controllers/AdminController.php";

$route = $_GET['route'];
$site = new SiteController('site');
$admin = new AdminController('admin');
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
if ($route == 'singlepost')
{
    $site->newsMore();
}
if ($route == 'createNews')
{
    $site->createNews();
}
if ($route == 'search')
{
    $site->searchNews();
}
if ($route == 'update')
{
    $site->updateNews();
}
if ($route == 'delete')
{
    $site->deleteNews();
}
if ($route == 'image')
{
    $site->image();
}
if ($route == 'mail')
{
    $site->mail();
}
if ($route == 'pdf')
{
    $site->pdf();
}
if ($route == 'login')
{
    $admin->login();
}
if ($route == 'logout')
{
    $admin->logout();
}
if ($route == 'admin/index')
{
    $admin->index();
}
if ($route == 'admin/news-list')
{
    $admin->newsList();
}
if ($route == 'admin/news-create')
{
    $admin->newsCreate();
}
if ($route == 'admin/news-edit')
{
    $admin->newsEdit();
}
if ($route == 'admin/news-delete')
{
    $admin->newsDelete();
}