<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 10.04.2019
 * Time: 20:47
 */

class AdminController extends Controller
{

    public function checkAuth()
    {
        $model = new AdminModel();
        if ($model->isLogged() == false)
        {
            header('Location: index.php?route=login');
        }
    }

    public function index()
    {
        $this->checkAuth();

        $this->render('_header');
        $this->render('index');
        $this->render('_footer');
    }

    public function login()
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $model = new AdminModel();
        $result = $model->checkLogin($login, $password);
        if ($result == true)
        {
            header('Location: index.php?route=admin/index');
        }

        $this->render('_login');
    }

    public function logout()
    {
        $model = new AdminModel();
        $model->logout();

        header('Location: index.php');
    }

}