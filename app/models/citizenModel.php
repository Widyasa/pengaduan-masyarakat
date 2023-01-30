<?php

class citizenModel{
    private $tablecitizens='tb_citizen';

    private $database = 'db_pengaduan_masyarakat';
    private $tablelevel='tb_level';
    
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectAllCitizens()
    {
        $query = "SELECT * FROM db_pengaduan_masyarakat.{$this->tablecitizens}";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultAll();

    }

    public function countCitizen()
    {
        $query="SELECT * FROM db_pengaduan_masyarakat.{$this->tablecitizens}";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultAll();
    }
    public function selectCitizensById($id)
    {
        $query = "SELECT * FROM {$this->tablecitizens} WHERE `citizen_id` = :citizen_id";
        $this->db->query($query);
        $this->db->execute();
        $this->db->resultSingle();
    }

    public function addCitizen($data)
    {
        $hash = password_hash($data['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO {$this->database}.{$this->tablecitizens} (`name` , `username`, `password`, `number`, `phone_number`, `address` , `id_level` )
                  VALUES (:name, :username, :password, :number, :phone_number, :address, 2)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $hash);
        $this->db->bind('number', $data['number']);
        $this->db->bind('phone_number', $data['phone_number']);
        $this->db->bind('address', $data['address ']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editCitizen($data)
    {
        $hash = password_hash($data['password'], PASSWORD_DEFAULT);

        $query = "UPDATE {$this->database}.{$this->tablecitizens} SET  `name`=:name,`number`=:number,`phone_number`=:phone_number,`address`=:address WHERE {$this->database}.{$this->tablecitizens}.citizen_id=:citizen_id" ;

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('number', $data['number']);
        $this->db->bind('phone_number', $data['phone_number']);
        $this->db->bind('address', $data['address ']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deleteCitizen($data)
    {
        $query = "DELETE * FROM {$this->database}.{$this->tablecitizens} WHERE `citizen_id` = :citizen_id";
        $this->db->query($query);
        $this->db->bind('citizen_id', $data['citizen_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
