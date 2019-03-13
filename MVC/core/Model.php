<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 20:57
 */

class Model {

    public function connection() {
        global $params;
        $connection = new PDO($params['dsn'], $params['username'], $params['password']);
        return $connection;
    }

    public function query($sql) {
        return $this->connection()->query($sql)->fetchAll();
    }

}