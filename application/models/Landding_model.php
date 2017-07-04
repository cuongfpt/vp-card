<?php
Class Landding_model extends MY_Model
{
    var $table = 'landding';
    function get_landding(){
        $this->db->order_by('id','DESC');
        $query = $this->db->get($this->table);
        if($query->result())
        {
            return $query->result();
        }else{
            return FALSE;
        }

    }
}