<?php

class Citizens extends Controller{

    public function index()
    {
        $data['title'] = 'Citizens';
        $data['citizens'] = $this->model('citizenModel')->selectAllcitizens();

        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar', $data);
        $this->view('admin/pages/citizens', $data);
        $this->view('admin/templates/footer', $data);
    }
}