<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 20:24
 */

Class SiteController extends Controller {

    public function home() {
        $this->render('home');
    }

    public function news() {
        $news = new NewsModel();
        $data['list_news'] = $news->getAll();
        $this->render('news', $data);
    }

    public function about() {
        $this->render('about');
    }

    public function contact() {

        $this->render('contact');
    }

    public function createNews(){
        $title = trim(isset($_GET['title']) ? $_GET['title'] : '');
        $body = trim(isset($_GET['body']) ? $_GET['body'] : '');
        if (!empty($title) && !empty($body) )
        {
            $new = new NewsModel();
            $new->create($title, $body);
        }
        else
        {
            echo "Bo`sh bo`lmasligi kerak!";
        }

    }

    public function searchNews() {
        $key = $_GET['key'];
        $news = new NewsModel();
        $items = $news->search($key);
        var_dump($items);
    }

    public function updateNews() {
        $id = $_GET['id'];
        $title = trim(isset($_GET['title']) ? $_GET['title'] : '');
        $body = trim(isset($_GET['body']) ? $_GET['body'] : '');
        $news = new NewsModel();
        $news->update($id, $title, $body);
    }

    public function deleteNews() {
        $id = $_GET['id'];
        $news = new NewsModel();
        $news->deleteById($news->table, $id);
    }

}