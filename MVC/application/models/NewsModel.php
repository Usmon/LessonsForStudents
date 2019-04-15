<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 21:08
 */

class NewsModel extends Model {

    public $table = 'news';

    /**
     * Get all items
     * @return array
     */
    public function getAll(){
        $result = $this->query('SELECT * FROM ' . $this->table);
        return $result;
    }

    /**
     * Create news
     * @param $title string
     * @param $body string
     */
    public function create($title, $body){
        //Insert process
        $this->query('INSERT INTO ' . $this->table . '(title, body, added_time) 
        VALUES ("'.$title.'", "'.$body.'", NOW())');
    }

    /**
     * Search method
     * @param $key
     * @return array
     */
    public function search($key) {
        $result = $this->query('SELECT * FROM '. $this->table
            .' WHERE title LIKE "%'.$key.'%" OR body LIKE "%'.$key.'%"');
        return $result;
    }

    /**
     * Update method
     * @param $id
     * @param $title
     * @param $body
     */
    public function update($id, $title, $body) {
        $this->query('UPDATE '.$this->table.' SET title = "'.$title.'", body = "'.$body.'" WHERE id = '.$id);
    }

    /**
     * Get one item
     * @param $id integer
     * @return bool|array
     */
    public function getOne($id)
    {
        $result = $this->query('SELECT * FROM '. $this->table .' WHERE id = '.$id);
        if ($result)
        {
            $inc = 1 + (int) $result[0]['view'];
            $increment = $this->connection()
                        ->query('UPDATE '. $this->table . ' SET view = '.$inc. ' WHERE id = '. $id)
                        ->execute();

            return $result;
        }

        return false;
    }

    /**
     * Delete news
     * @param $id
     */
    public function delete($id)
    {
        $this->deleteById($this->table, $id);
    }

}