<?php
class Distributor{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getDistributors(){
        $this->db->query(
            'SELECT *,
            CONCAT_WS(" ",distributor_name) as name
            FROM distributor 
            ORDER BY distributor_name'
        );
        $result = $this->db->resultSet();
        return $result;

    }

    public function addDistributor($data){
        $this->db->query('INSERT INTO DISTRIBUTOR(distributor_name, distributor_email, distributor_number) VALUES(:distributor_name,:distributor_email,:distributor_number)');

        $this->db->bind(':distributor_name', $data['distributor_name']);
        $this->db->bind(':distributor_email', $data['distributor_email']);
        $this->db->bind(':distributor_number', $data['distributor_number']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function updateDistributor($data){
        $this->db->query('UPDATE DISTRIBUTOR SET distributor_name= :distributor_name, distributor_email= :distributor_email, distributor_number= :distributor_number WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':distributor_name', $data['distributor_name']);
        $this->db->bind(':distributor_email', $data['distributor_email']);
        $this->db->bind(':distributor_number', $data['distributor_number']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    public function deleteDistributor($id){
        $this->db->query('DELETE FROM DISTRIBUTOR WHERE id = :id');

        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    Public function getDistributorById($id){
        $this->db->query('SELECT
        Distributor.id as id,
        product.product_name as product,
        Distributor.distributor_name as name,
        Distributor.distributor_email as email,
        Distributor.distributor_number as number
        FROM product RIGHT JOIN Distributor ON product.product_id = Distributor.id
        WHERE id = :id
        ');

    $this->db->bind(':id', $id);
    $row = $this->db->single();
    return $row;
    }
}
?>