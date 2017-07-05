<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Faq_model');
        $this->load->model('Category_model');
        $this->load->model('News_model');
        $this->load->model('Adv_model');
         $this->load->model('Contact_model');
    }
function index(){  
        //list tin faq
        $listfaq = $this->Faq_model->get_list_faq();
        $this->data['faq'] = $listfaq;
        //list guide
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] = $listguide;
        // list menu footer
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] = $menufooter;
       
        //list faq
        $list = $this->Category_model->get_list_contact();
        $this->data['list'] = $list;
        //listpartner
        $listPartner= $this->Adv_model->get_adv_by_position(2);
        $this->data['Partner'] =$listPartner;

        $menuContact = $this->Category_model->get_category_by_contact();
        $this->data['menuContact'] = $menuContact;

        $this->data['temp'] = 'site/contact/index';
        $this->load->view('site/main-cat', $this->data);
    }
function detail(){  
        $last = end($this->uri->segments);
        if (preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        var_dump($id);
        //list tin faq
        $listfaq = $this->Faq_model->get_list_faq();
        $this->data['faq'] = $listfaq;
        //list guide
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] = $listguide;
        // list menu footer
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] = $menufooter;
       
        //list faq
        $list = $this->Category_model->get_list_contact_by_catid($id);
        $this->data['list'] = $list;
        //listpartner
        $listPartner= $this->Adv_model->get_adv_by_position(2);
        $this->data['Partner'] =$listPartner;

        $menuContact = $this->Category_model->get_category_by_contact();
        $this->data['menuContact'] = $menuContact;

        $this->data['temp'] = 'site/contact/index';
        $this->load->view('site/main-cat', $this->data);
    }
   
}