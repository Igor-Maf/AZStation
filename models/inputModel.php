<?php
class inputModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getGifts() {
        $gifts = $this->_db->query("SELECT * FROM gift");
        return $gifts->fetchAll();
    }
}