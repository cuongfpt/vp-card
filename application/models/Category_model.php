<?php
Class Category_model extends MY_Model
{
    var $table = 'category`';
    //get role by menu
    function get_category_footer(){
        $this->db->where('isfooter',1);
        $this->db->order_by('orderno','ASC');
        $query = $this->db->get($this->table);
        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }

    }
    function get_category_parent($id){
        $this->db->where('parent_id',$id);
        $query = $this->db->get($this->table);
        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }
    }
    function get_category_by_faq(){
        $this->db->where('typepage',4);
        $this->db->order_by('orderno','ASC');
        $query = $this->db->get($this->table);

        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }

    }
    function get_category_guide(){
        $this->db->where('typepage',1);
        $this->db->order_by('orderno','asc');
        $query = $this->db->get($this->table);
        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }

    }
}