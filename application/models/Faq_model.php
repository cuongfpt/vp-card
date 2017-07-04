<?php
Class Faq_model extends MY_Model
{
    var $table = 'faq';
    function get_list_faq()
    {
        $this->db->where('status', 1);
        $this->db->where('ishome', 1);
        $this->db->order_by('orderNo', 'DESC');
        $query = $this->db->get($this->table);

        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    function get_list_faq_by_catid($catid)
    {
        $this->db->where('parent_id',$catid);
        $this->db->order_by('orderNo', 'DESC');
        $query = $this->db->get($this->table);

        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
}
