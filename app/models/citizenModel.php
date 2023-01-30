<?php

class citizenModel{
    private $tablecitizens='tb_citizen';
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
}
