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
}
