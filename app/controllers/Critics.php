<?php
class  Critics extends Controller
{
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
        $this->view('admin/templates/header', $data);
        $this->view('admin/templates/sidebar', $data);
        $this->view('admin/pages/critic', $data);
        $this->view('admin/templates/footer', $data);
    }

    public function store()
    {
//        var_dump($_POST); die();
        if ($this->model('criticModel')->sendFeedback($_POST)>0)   {
           $this->model('criticModel')->updateStatusCritic($_POST['id_critics']);
            redirect('critics');
        } else{
            redirect('critics');
        }
    }
}
