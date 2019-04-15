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

    public function newsList()
    {
        $this->checkAuth();

        $model = new NewsModel();
        $list = $model->getAll();

        $this->render('_header');
        $this->render('news-list', [
            'items' => $list
        ]);
        $this->render('_footer');
    }

    public function newsCreate()
    {
        $this->checkAuth();
        if (!empty($_POST['title']) && !empty($_POST['body'])){
            $model = new NewsModel();
            $title = trim($_POST['title']);
            $body  = trim($_POST['body']);

            $model->create($title, $body);
            header('Location: index.php?route=admin/news-list');
        }

        $this->render('_header');
        $this->render('news-create');
        $this->render('_footer');
    }

    public function newsEdit()
    {
        $this->checkAuth();
        if (empty($_GET['id'])){
            header('Location: index.php?route=admin/news-list');
        }
        $id = $_GET['id'];
        $model = new NewsModel();
        $item = $model->getOne($id);
        if (!empty($_POST['title']) && !empty($_POST['body'])){
            $title = trim($_POST['title']);
            $body  = trim($_POST['body']);

            $model->update($id, $title, $body);
            header('Location: index.php?route=admin/news-list');
        }

        $this->render('_header');
        $this->render('news-edit',[
            'item' => $item[0]
        ]);
        $this->render('_footer');
    }

    public function newsDelete()
    {
        $id = $_GET['id'];
        $model = new NewsModel();
        $model->delete($id);
        header('Location: index.php?route=admin/news-list');
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