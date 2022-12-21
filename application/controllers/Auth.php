<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function templates($url, $data)
    {
        $this->load->view('auth/template/header', $data);
        $this->load->view($url);
        $this->load->view('auth/template/js');
    }

    public function sign_in()
    {
        $data['title'] = 'Sign In';
        $this->templates('auth/login', $data);
    }

    public function register()
    {
        $data['title'] = 'Sign Up';
        $this->templates('auth/register', $data);
    }
}