<?php

class Citizens extends Controller{

    public function __construct()
    {
        if (empty($_SESSION['id']) && empty($_SESSION['id_citizen'])){
            redirect('auth/');
        }
    }
    public function index()
    {
        if ($_SESSION['id_level']===1){
            $data['title'] = 'Citizens';
            $data['citizens'] = $this->model('citizenModel')->selectAllcitizens();

            $this->view('templates/header', $data);
            $this->view('templates/sidebar', $data);
            $this->view('admin/pages/citizens', $data);
            $this->view('templates/footer', $data);
        }

    }

    public function store()
    {
        if ($this->model('citizenModel')->addCitizen($_POST)){
            redirect('citizens');
        }
    }

    public function edit()
    {
        if($this->model('citizenModel')->editCitizen($_POST)){
            redirect('citizens');
        } else{
           redirect('citizens');
        }
    }

    public function delete()
    {

        if ($this->model('citizenModel')->deleteCitizen($_POST['id_citizen'])){
            redirect('citizens');
        }

    }

}