<?php
class indexModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getGas() {
        $gas = $this->_db->query("SELECT * FROM gas");
        return $gas->fetchAll();
    }   
    
    public function getGasById($id) {
        $gas_by_id = $this->_db->query("SELECT * FROM gas WHERE gas_id = $id");
        return $gas_by_id->fetch();
    }
    
    public function editGasPrice($id, $price) {
        $this->_db
            ->prepare(
                "UPDATE gas SET gas_price = :price WHERE gas_id = :id")
            ->execute (array(
                ':id' => $id,
                ':price' => $price));
    }
    
    /* for buy page */
    public function getGasPriceByType($type) {
        $gas_price_by_type = $this->_db->query("SELECT gas_price FROM gas WHERE gas_type = '$type'");
        return $gas_price_by_type->fetchColumn();
    }
}
