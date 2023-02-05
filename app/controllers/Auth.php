<?php

class Auth extends Controller{
    public function login()
    {
        $data['title'] = 'Login';
        $this->view('auth/login', $data);
    }
}
