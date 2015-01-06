<?php
class clientGiftsModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getGiftsByScores($scores) {
        $gifts = $this->_db->query("SELECT * FROM gift WHERE gift_scores <= '$scores'");
        return $gifts->fetchAll();
    }
    
    public function editClientScores($id, $scores) {
        $this->_db
            ->prepare(
                "UPDATE clients SET "
                . "client_scores = :scores "
                . "WHERE client_id = :id")
            ->execute (array(
                ':id' => $id,
                ':scores' => $scores));
    }
}