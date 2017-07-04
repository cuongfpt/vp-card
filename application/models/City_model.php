<?php
Class City_model extends MY_Model
{
    var $table = 'city';
    function get_list_city()
    {
        $this->db->order_by('orderNo', 'asc');
        $query = $this->db->get($this->table);

        if ($query->result()) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
}