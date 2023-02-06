<?php

class Auth extends Controller{

    public function __construct()
    {
        if(isset($_SESSION['id']) && $_GET['url'] != 'login/logout'){
            redirect('dashboard/index');
        }
        if(isset($_SESSION['id_citizen']) && $_GET['url'] != 'login/logout'){
            redirect('dashboard/index');
        }
    }
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('auth/login', $data);
    }
    public function createAdminSession($admin)
    {
        $_SESSION['id'] = $admin['id'];
        $_SESSION['username'] = $admin['username'];
        $_SESSION['id_level'] = 1;
    }
    public function createCitizenSession($citizen)
    {
        $_SESSION['id_citizen'] = $citizen['id_citizen'];
        $_SESSION['username'] = $citizen['username'];
        $_SESSION['name'] = $citizen['name'];
        $_SESSION['number'] = $citizen['number'];
        $_SESSION['phone_number'] = $citizen['phone_number'];
        $_SESSION['address'] = $citizen['address'];
        $_SESSION['id_level'] = 2;
    }
    public function verifyPassword($data)
    {
            if ($_POST['password'] === $data['password'] && isset($data['id'])){
            $this->createAdminSession($data);
            redirect('dashboard/index');
        }
        if (password_verify($_POST['password'], $data['password']) && isset($data['id_citizen'])){
            $this->createCitizenSession($data);
            redirect('dashboard/index');
        } redirect('auth/');
    }

    public function login()
    {
        $admin=$this->model('adminModel')->selectAdminByUsername($_POST['username']);
        $citizen=$this->model('citizenModel')->selectCitizensByUsername($_POST['username']);
        if ($admin){
            $this->verifyPassword($admin);
        }
        if ($citizen){
            $this->verifyPassword($citizen);
        }
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        redirect('auth/');
    }

//    public function store()
//    {
//        $loggedInUser = $this->login($_POST);
//        if($loggedInUser){
//            $this->model('Auth')->createSession($loggedInUser);
//            header("Location:" . BASEURL . "home/index");
//        } else {
//            $data['title']='Login';
//            $this->view('templates/header',$data);
//            $this->view('login',$data);
//            $this->view('templates/footer',$data);
//        }
//    }


}
