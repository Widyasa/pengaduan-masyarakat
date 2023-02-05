<?php

class Dashboard extends Controller{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['countCitizen'] = count($this->model('citizenModel')->countCitizen());
        $data['countCritics'] = count($this->model('criticModel')->countCritics());
        $data['countFeedback'] = count($this->model('feedbackModel')->countFeedback());
        $data['countUnFeedbackCritic'] = count($this->model('criticModel')->countUnFeddbackCritic());
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/pages/dashboard', $data);
        $this->view('templates/footer', $data);
    }
}