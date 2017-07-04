<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->model('Adv_model');
        $this->load->model('Faq_model');
        $this->load->model('Category_model');
    }
    public function index()
    {
        //list danh sach trang chủ
        $listhome = $this->News_model->get_list_news_home();
        $this->data['listhome'] =$listhome;
        //list slider
        $listSlider= $this->Adv_model->get_adv_by_position(1);
        $this->data['listSlider'] =$listSlider;
        //listpartner
        $listPartner= $this->Adv_model->get_adv_by_position(2);
        $this->data['Partner'] =$listPartner;
        //list adv
        $listAdv= $this->Adv_model->get_adv_by_position(3);
        $this->data['adv'] =$listAdv;
        //list tin km
        $listsale = $this->News_model->get_list_news_Sale();
        $this->data['listsale'] =$listsale;
        //list tin faq
        $listfaq = $this->Faq_model->get_list_faq();
        $this->data['faq'] =$listfaq;
        //list guide
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] =$listguide;
        // list menu footer
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] =$menufooter;
        $this->data['temp'] = 'site/home/index';
        $this->load->view('site/main', $this->data);
    }
}
