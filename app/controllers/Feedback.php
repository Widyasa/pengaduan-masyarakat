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
        if ($this->model('feedbackModel')->deleteFeedback($_POST['id_feedback']))
        {
            $this->model('feedbackModel')->editStatusFeedback($_POST['id_feedback']);
            redirect('feedback');
        } else{
            redirect('feedback');
        }
    }
}