<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landding extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Landding_model');
        $this->load->model('Contact_model');
    }

    public function index()
    {
        $list = $this->Landding_model->get_landding();
        $this->data['list'] = $list;
        $this->data['temp'] = 'site/landding/index';
        $this->load->view('site/main-landding', $this->data);
    }

    function  addContact()
    {
        $data = array(
            'fullName' => $_GET['fullname'],
            'email' => $_GET['email'],
            'content' => $_GET['content'],
        );
        if ($data != null) {
            $this->Contact_model->create($data);
            echo 'thành công';
        } else {
            echo 'không thanh công';
        }
    }
}
