<?php
Class Adv_model extends MY_Model
{
    var $table = 'adv';

    function get_adv_by_position($position){
        $this->db->where('position',$position);
        $this->db->order_by('orderNo','DESC');
        $query = $this->db->get($this->table);
        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }
    }
}
