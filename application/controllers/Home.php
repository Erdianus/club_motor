<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function templates($url, $data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view($url, $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/js');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->templates('home', $data);
    }

    public function gallery()
    {
        $data['title'] = 'Gallery';
        $this->templates('gallery', $data);
    }

    public function member()
    {
        $data['title'] = 'Member';
        $this->templates('member', $data);
    }

    public function event()
    {
        $data['title'] = 'Event';
        $this->templates('event', $data);
    }
}