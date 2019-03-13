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

}