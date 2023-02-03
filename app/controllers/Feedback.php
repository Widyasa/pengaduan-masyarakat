<?php

class Feedback extends Controller
{
    public function index()
    {
        $data['title'] = 'Feedback';
        $data['feedbacks'] = $this->model('feedbackModel')->viewCriticSender();
        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar', $data);
        $this->view('admin/pages/feedback', $data);
        $this->view('admin/templates/footer', $data);
    }
}