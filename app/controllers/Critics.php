<?php
class  Critics extends Controller
{
    public function __construct()
    {
        if (empty($_SESSION['id']) && empty($_SESSION['id_citizen'])){
            redirect('auth/');
        }
    }
    public function index()
    {
//        $data=
//            [
//                'id_critics' =>5,
//                'feedback' =>'okok nanti tak jual grobaknya'
//            ];
//        var_dump($this->model('criticModel')->sendFeedback($data)); die;
        $data['title'] = 'Critics';
        $data['critics'] = $this->model('criticModel')->selectUnFeddbackCritic();
        if (isset($_SESSION['id_citizen'])){
            $data['criticId'] = $this->model('criticModel')->selectUnFeddbackCriticById();
        }
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('admin/pages/critic', $data);
        $this->view('templates/footer', $data);
    }

    public function store()
    {
        if ($this->model('criticModel')->sendFeedback($_POST))   {
           $this->model('criticModel')->updateStatusCritic($_POST['id_critics']);
        }

            redirect('critics');
    }

    public function storeCritic()
    {
            if ($this->model('criticModel')->addCritic($_POST)){
                redirect('critics');
            }redirect('critics');
    }

    public function edit()
    {
    
        if(isset($_SESSION['id_citizen'])){
            if($this->model('criticModel')->editCritic($_POST)){
                redirect('critics');
            }
            redirect('critics');
        }
    }
    public function delete()
    {
    
        if(isset($_SESSION['id_citizen'])){
            if($this->model('criticModel')->deleteCritic($_POST['id_critics'])){
                redirect('critics');
            }
            redirect('critics');
        }
    }

}
