<?php

class feedbackModel{

    private $tablefeedback = 'tb_feedback';
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
        $this->db->resultSingle();
    }
}


