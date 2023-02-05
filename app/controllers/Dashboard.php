<?php

class Dashboard extends Controller{

    public function __construct()
    {
        if (empty($_SESSION['id']) && empty($_SESSION['id_citizen'])){
            redirect('auth/');
        }
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['countCitizen'] = count($this->model('citizenModel')->countCitizen());
        $data['countCritics'] = count($this->model('criticModel')->countCritics());
        $data['countCriticsById'] = count($this->model('criticModel')->countCriticsById());
        $data['countFeedback'] = count($this->model('feedbackModel')->countFeedback());
        $data['countFeedbackById'] = count($this->model('feedbackModel')->countFeedbackById());
        $data['countUnFeedbackCritic'] = count($this->model('criticModel')->countUnFeddbackCritic());
        $data['countUnFeedbackCriticById'] = count($this->model('criticModel')->countUnFeedbackCriticById());
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/pages/dashboard', $data);
        $this->view('templates/footer', $data);
    }






}