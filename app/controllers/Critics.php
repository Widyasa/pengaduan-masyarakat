<?php
class  Critics extends Controller
{
    public function index()
    {
        $data['title'] = 'Critics';
        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar', $data);
        $this->view('admin/pages/critic', $data);
        $this->view('admin/templates/footer', $data);
    }
}
