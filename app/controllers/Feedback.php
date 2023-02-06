<?php

class Feedback extends Controller
{
    public function __construct()
    {
        if (empty($_SESSION['id']) && empty($_SESSION['id_citizen'])){
            redirect('auth/');
        }
    }
    public function index()
    {
        $data['title'] = 'Feedback';
        $data['feedbacks'] = $this->model('feedbackModel')->viewCriticSender();

        if (isset($_SESSION['id_citizen'])){
            $data['feedbacksId'] = $this->model('feedbackModel')->viewCriticSenderById();
        }
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/pages/feedback', $data);
        $this->view('templates/footer', $data);
    }

    public function edit()
    {
        if ($this->model('feedbackModel')->editFeedback($_POST)){
            redirect('feedback');
        } else{
            redirect('feedback');
        }
    }

    public function delete()
    {
        if ($this->model('feedbackModel')->editStatusFeedback($_POST['id_feedback']))
        {
            $this->model('feedbackModel')->deleteFeedback($_POST['id_feedback']);
            redirect('feedback');
        } else{
            redirect('feedback');
        }
    }
}