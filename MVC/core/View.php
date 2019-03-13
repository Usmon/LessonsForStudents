<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 20:33
 */

class View {

    public function output($view_path, $data) {
        include 'application/views/' . $view_path . '.php';
    }

}