<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->model('Adv_model');
        $this->load->model('Faq_model');
        $this->load->model('Category_model');

    }
  function index()
    {
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] = $listguide;
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] = $menufooter;
         //list child cat
        $listcat = $this->Category_model->get_category_guide_parent();
        $this->data['listcat'] = $listcat;

        $info = $this->News_model->get_list_news_guide_detail();
        $this->data['info'] = $info;
         $this->data['temp'] = 'site/news/guide-news';
        $this->load->view('site/main-cat', $this->data);
    }

    function detail()
    {
        $last = end($this->uri->segments);
        if (preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        $info = $this->News_model->get_info($id);
        $this->data['info'] = $info;
        $list = $this->News_model->get_list_news_other($id, $info->catid);
        $this->data['list'] = $list;
        $this->data['meta_title'] = $info->titlepage;
        $this->data['meta_keyword'] = $info->keyword;
        $this->data['meta_description'] = $info->metadescription;
//list adv
        $listAdv = $this->Adv_model->get_adv_by_position(3);
        $this->data['adv'] = $listAdv;
        //list tin km
        $listsale = $this->News_model->get_list_news_Sale();
        $this->data['listsale'] = $listsale;
        //list tin faq
        $listfaq = $this->Faq_model->get_list_faq();
        $this->data['faq'] = $listfaq;
        //list guide
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] = $listguide;
        // list menu footer
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] = $menufooter;
        $this->data['temp'] = 'site/news/index';
        $this->load->view('site/main-cat', $this->data);
    }
    function newscat()
    {
        $last = end($this->uri->segments);
        if (preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        $listcat = $this->Category_model->get_category_parent($id);
        $this->data['listcat'] = $listcat;
        //list adv
        $listAdv = $this->Adv_model->get_adv_by_position(3);
        $this->data['adv'] = $listAdv;
        //list tin km
        $listsale = $this->News_model->get_list_news_Sale();
        $this->data['listsale'] = $listsale;
        //list tin faq
        $listfaq = $this->Faq_model->get_list_faq();
        $this->data['faq'] = $listfaq;
        //list guide
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] = $listguide;
        // list menu footer
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] = $menufooter;
        //listpartner
        $listPartner= $this->Adv_model->get_adv_by_position(2);
        $this->data['Partner'] =$listPartner;

        $this->data['temp'] = 'site/news/news-cat';
        $this->load->view('site/main-cat', $this->data);
    }
    function get_list_new_by_cat(){
        $catid =$_GET['catid'];
        $list = $this->News_model->get_list_news_category($catid);
        echo json_encode($list);
    }
    function newsguide(){
        $last = end($this->uri->segments);
        if (preg_match_all('/\d+/', $last, $numbers))
            $id = end($numbers[0]);
        //list child cat
        $listcat = $this->Category_model->get_category_guide_parent();
        $this->data['listcat'] = $listcat;
        $info1 = $this->News_model->get_info($id);
        $this->data['info'] = $info1;
        //list tin faq
        $listfaq = $this->Faq_model->get_list_faq();
        $this->data['faq'] = $listfaq;
        //list guide
        $listguide = $this->News_model->get_list_news_Guide();
        $this->data['guide'] = $listguide;
        // list menu footer
        $menufooter = $this->Category_model->get_category_footer();
        $this->data['menufooter'] = $menufooter;
        //listpartner
        $listPartner= $this->Adv_model->get_adv_by_position(2);
        $this->data['Partner'] =$listPartner;

        $this->data['temp'] = 'site/news/news-guide';
        $this->load->view('site/main-cat', $this->data);
    }
}