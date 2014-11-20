<?php
class giftsModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getGifts() {
        $gifts = $this->_db->query("SELECT * FROM gift");
        return $gifts->fetchAll();
    }
    
    public function insertGift($thumb_url, $name, $thumb_path, $scores) {
        $this->_db
            ->prepare(
                "INSERT INTO gift VALUES(NULL, :thumb_url, :name, :thumb_path, :scores)")
            ->execute (array(
                ':thumb_url' => $thumb_url,
                ':name' => $name,
                ':thumb_path' => $thumb_path,
                ':scores' => $scores));
    }

    public function getGiftById($id) {
        $gift_by_id = $this->_db->query("SELECT * FROM gift WHERE gift_id = $id");
        return $gift_by_id->fetch();
    }
    
    public function deleteGift($id) {
        $this->_db
            ->prepare("DELETE FROM gift WHERE gift_id = :id")
            ->execute (array(':id' => $id));
    }
}