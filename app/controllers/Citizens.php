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
            $data['title'] = 'Citizens';
            $data['citizens'] = $this->model('citizenModel')->selectAllcitizens();

            $this->view('admin/templates/header', $data);
            $this->view('admin/templates/sidebar', $data);
            $this->view('admin/pages/citizens', $data);
            $this->view('admin/templates/footer', $data);
        }
    }

    public function delete()
    {

        if ($this->model('citizenModel')->deleteCitizen($_POST['id_citizen'])){
            redirect('citizens');
        }

    }

}