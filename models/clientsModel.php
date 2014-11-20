<?php
class clientsModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getClients() {
        $clients = $this->_db->query("SELECT * FROM clients");
        return $clients->fetchAll();
    }
    
    public function verificationClientMail($client_mail) {
        $client_id = $this->_db->query("SELECT client_id FROM clients WHERE client_mail = '$client_mail'");
        if ($client_id->fetch()) return true;
    }
    
    public function insertClient($client_fio, $client_address, $client_mail, $client_number) {
        $this->_db
            ->prepare(
                "INSERT INTO clients VALUES(NULL, :client_fio, :client_address, :client_mail, :client_number, DEFAULT)")
            ->execute (array(
                ':client_fio' => $client_fio,
                ':client_address' => $client_address,
                ':client_mail' => $client_mail,
                ':client_number' => $client_number));
    }
    
    public function getClientById($id) {
        $client_by_id = $this->_db->query("SELECT * FROM clients WHERE client_id = $id");
        return $client_by_id->fetch();
    }
    
    public function editClient($id, $fio, $address, $mail, $number, $scores) {
        $this->_db
            ->prepare(
                "UPDATE clients SET "
                . "client_fio = :fio, "
                . "client_address = :address, "
                . "client_mail = :mail, "
                . "client_number = :number, "
                . "client_scores = :scores "
                . "WHERE client_id = :id")
            ->execute (array(
                ':id' => $id,
                ':fio' => $fio,
                ':address' => $address,
                ':mail' => $mail,
                ':number' => $number,
                ':scores' => $scores));
    }
    
    public function deleteClient($id) {
        $this->_db
            ->prepare("DELETE FROM clients WHERE client_id = :id")
            ->execute (array(':id' => $id));
    }
}