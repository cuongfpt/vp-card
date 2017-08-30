<?php

Class News_model extends MY_Model
{
    var $table = 'news';

    function get_list_news_home()
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->where('isHome', 1)
            ->where('ExpireDate <=', $expiredate)
            ->where('isActive', 1);
        $this->db->order_by('orderNo', 'ASC');
        $this->db->order_by('createTime', 'DESC');
        $query = $this->db->get($this->table);
        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }


    function get_list_news_Sale()
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->where('issale', 1)
            ->where('ExpireDate <=', $expiredate)
            ->where('isActive', 1);
       // $this->db->order_by('orderNo', 'ASC');
          $this->db->order_by('createTime', 'DESC');
        $query = $this->db->get($this->table);

        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    function get_list_news_Guide()
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->where('isguide', 1)
            ->where('isfooter', 1)
            ->where('ExpireDate <=', $expiredate)
            ->where('isActive', 1);
        $this->db->order_by('orderNo', 'ASC');
        $query = $this->db->get($this->table);

        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
     
    function get_count_news_home()
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->where('isHome', 1)
        ->where('ExpireDate <=', $expiredate)
        ->where('isActive', 1);
        $this->db->order_by('orderNo', 'ASC');
        $query = $this->db->get($this->table);
        if ($query->num_rows()) {
            return $query->num_rows();
        } else {
            return FALSE;
        }
    }

    function get_list_news_category($catid)
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->select('title,news.description,createTime,news.seoLink,news.id,news.images,expiredate,isactive')
            ->from('news')
            ->join('category', 'news.catId =category.id')
            ->where('catId', $catid)
            ->where('ExpireDate <=', $expiredate)
            ->where('isActive', 1)
            ->or_where('parent_id', $catid);
        $query = $this->db->get();

        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }

    }

    function get_count_news_category($catid)
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->select('title,news.description,createTime,news.seoLink,news.id,news.images')
            ->from('news')
            ->join('category', 'news.catId =category.id')
            ->where('catId', $catid)
            ->where('ExpireDate <=', $expiredate)
            ->where('isActive', 1)
            ->or_where('parent_id', $catid);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->num_rows();
        } else {
            return FALSE;
        }
    }

    function get_list_news_other($id, $catid)
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->where('catId', $catid);
        $this->db->where('id !=', $id)
        ->where('ExpireDate <=', $expiredate)
        ->where('isActive', 1);
        $this->db->limit(0, 5);
        $this->db->order_by('createTime', 'DESC');
        $query = $this->db->get($this->table);
        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
 function searchNews(){
     $sort_order = "asc";
     $sort_by = 'orderNo';
     $q = $this->db->select('*')
         ->from('news')
         ->order_by($sort_by, $sort_order)
         ->limit(1000);
     if ($this->input->get('title')) {
         $q->where('title like','%'. $this->input->get('title').'%');
     }
     //nếu dữ liệu trả về hợp lệ
     $ret['rows'] = $q->get()->result();
     return $ret;
 }
    function getCountSearchNews()
    {
        if ($this->input->get('title')) {
            $this->db->where('title like','%'. $this->input->get('title').'%');
        }
        $this->db->order_by('createTime', 'DESC');
        $query = $this->db->get($this->table);
        if ($query->num_rows()) {
            return $query->num_rows();
        } else {
            return FALSE;
        }
    }
     function get_list_news_guide_detail()
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->where('isguide', 1)
            ->where('ExpireDate <=', $expiredate)
            ->where('isActive', 1);
        $query = $this->db->get($this->table);

        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
     function get_list_news_guide_category($catid)
    {
        $date = new DateTime();
        $expiredate = date_format($date, 'Y-m-d');
        $this->db->select('title,news.description,createTime,news.seoLink,news.id,news.images,expiredate,isactive')
            ->from('news')
            ->join('category', 'news.catId =category.id')
            ->where('catId', $catid)
            ->where('ExpireDate <=', $expiredate)
            ->where('isActive', 1)
             ->where('isguide', 1)
            ->or_where('parent_id', $catid);
        $query = $this->db->get();

        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }

    }
}