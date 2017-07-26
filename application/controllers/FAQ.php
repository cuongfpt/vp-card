<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Faq_model');
        $this->load->model('Category_model');
        $this->load->model('News_model');
        $this->load->model('Adv_model');
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
        //list menu faq
        $menufaq = $this->Category_model->get_category_by_faq();
        $this->data['menufaq'] = $menufaq;
        //list faq
        $list = $this->Faq_model->get_list_faq();
        $this->data['list'] = $list;
        //listpartner
        $listPartner= $this->Adv_model->get_adv_by_position(2);
        $this->data['Partner'] =$listPartner;

        $this->data['temp'] = 'site/faq/faq-cat';
        $this->load->view('site/main-cat', $this->data);
    }

    function detail()
    {
        $last = end($this->uri->segments);
        if (preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        $info = $this->Faq_model->get_info($id);
        $this->data['info'] = $info;
        //list tin faq
        $listfaq = $this->Faq_model->get_list_faq();
        $this->data['faq'] = $listfaq;
        //list guide
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] = $listguide;
        // list menu footer
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] = $menufooter;
        //list menu faq
        $menufaq = $this->Category_model->get_category_by_faq();
        $this->data['menufaq'] = $menufaq;
        //listpartner
        $listPartner= $this->Adv_model->get_adv_by_position(2);
        $this->data['Partner'] =$listPartner;

        $this->data['temp'] = 'site/faq/index';
        $this->load->view('site/main-cat', $this->data);
    }
    function catfaq(){
        $last = end($this->uri->segments);
        if (preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        //list tin faq
        $listfaq = $this->Faq_model->get_list_faq();
        $this->data['faq'] = $listfaq;
        //list guide
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] = $listguide;
        // list menu footer
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] = $menufooter;
        //list menu faq
        $menufaq = $this->Category_model->get_category_by_faq();
        $this->data['menufaq'] = $menufaq;
        //list faq
        $list = $this->Faq_model->get_list_faq_by_catid($id);
        $this->data['list'] = $list;
        //listpartner
        $listPartner= $this->Adv_model->get_adv_by_position(2);
        $this->data['Partner'] =$listPartner;

        $this->data['temp'] = 'site/faq/faq-cat';
        $this->load->view('site/main-cat', $this->data);
    }
}