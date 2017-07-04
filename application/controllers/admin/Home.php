<?php
Class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();


    }
    function index()
    {

        $this->lang->load('admin/home');
        $this->data['temp'] = 'admin/home/index';
        $this->load->view('admin/main', $this->data);
    }
}