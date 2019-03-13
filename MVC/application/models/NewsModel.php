<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 21:08
 */

class NewsModel extends Model {

    private $table = 'news';

    public function getAll(){
        $result = $this->query('SELECT * FROM ' . $this->table);
        return $result;
    }

    public function create(){
        $this->query('INSERT INTO ' . $this->table . '(title, body, added_time) 
        VALUES ("Lorem ispsum", "Full Test text", NOW())');
    }

}