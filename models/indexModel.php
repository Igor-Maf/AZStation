<?php
class indexModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getGas() {
        $gas = $this->_db->query("SELECT * FROM gas");
        return $gas->fetchAll();
    }   
    
    public function editGasPrice($id, $price) {
        $this->_db
            ->prepare(
                "UPDATE gass SET gas_price = :price WHERE gas_id = :id")
            ->execute (array(
                ':id' => $id,
                ':price' => $price));
    }
}
