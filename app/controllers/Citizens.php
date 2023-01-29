<?php

class Citizens extends Controller{

    public function index()
    {
        $this->view('admin/templates/header');
        $this->view('admin/pages/citizens');
        $this->view('admin/templates/footer');
    }
}