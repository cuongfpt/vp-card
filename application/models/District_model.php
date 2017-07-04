<?php
Class District_model extends MY_Model
{
    var $table = 'district';
    function get_list_by_cityid($id)
    {
        $this->db->where('cityid', $id);
        $this->db->order_by('orderNo', 'ASC');
        $query = $this->db->get($this->table);
        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
}