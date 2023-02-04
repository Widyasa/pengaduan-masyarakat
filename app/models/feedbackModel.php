<?php

class feedbackModel{

    private $tablefeedback = 'tb_feedback';
    private $tbcitizen = 'tb_citizen';
    private $tbcritics = 'tb_critics';
    private $tablelevel = 'tb_level';

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function selectAllFeedback()
    {
        $query = "SELECT * FROM db_pengaduan_masyarakat.{$this->tablefeedback}";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultAll();

    }

    public function countFeedback()
    {
        $query = "SELECT * FROM db_pengaduan_masyarakat.{$this->tablefeedback}";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultAll();
    }

    public function selectFeedbackById($id)
    {
        $query = "SELECT * FROM {$this->tablefeedback} WHERE `feedback_id` = :feedback_id";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSingle();
    }

    public function viewCriticSender()
    {
        $query = "SELECT {$this->tablefeedback}.id_feedback, {$this->tablefeedback}.date, {$this->tbcitizen}.name, {$this->tbcritics}.critic, {$this->tablefeedback}.feedback,
                 {$this->tbcritics}.id_critics, 
                 {$this->tbcitizen}.id_citizen FROM 
                 (({$this->tablefeedback}  INNER JOIN 
                  {$this->tbcritics} ON 
                  {$this->tablefeedback}.id_critics = 
                  {$this->tbcritics}.id_critics)
                  INNER JOIN {$this->tbcitizen} ON 
                  {$this->tbcitizen}.id_citizen
                  = {$this->tbcritics}.id_citizen)";
        $this->db->query($query);
        return $this->db->resultAll();
    }

}


