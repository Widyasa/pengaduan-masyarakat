<?php


class criticModel
{
    private $tablecritics = 'tb_critics';
    private $tablefeedback= 'tb_feedback';
    private $dbname = 'db_pengaduan_masyarakat';
    private $tablelevel = 'tb_level';

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectAllCritics()
    {
        $query = "SELECT * FROM db_pengaduan_masyarakat.{$this->tablecritics}";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultAll();

    }

    public function countCritics()
    {
        $query = "SELECT * FROM db_pengaduan_masyarakat.{$this->tablecritics}";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultAll();
    }

    public function countUnFeddbackCritic()
    {
        $query = "SELECT {$this->dbname}.{$this->tablecritics}.`id_critics`, {$this->dbname}.{$this->tablefeedback}.`id_critics`
                FROM {$this->dbname}.{$this->tablecritics} LEFT JOIN {$this->dbname}.{$this->tablefeedback} ON 
                {$this->dbname}.{$this->tablecritics}.`id_critics` = {$this->dbname}.{$this->tablefeedback}.`id_critics`
                WHERE {$this->dbname}.{$this->tablefeedback}.`id_critics` IS NULL";

        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultAll();
    }



    public function selectCriticsById($id)
    {
        $query = "SELECT * FROM {$this->tablecritics} WHERE `citizen_id` = :citizen_id";
        $this->db->query($query);
        $this->db->execute();
        $this->db->resultSingle();
    }
}

