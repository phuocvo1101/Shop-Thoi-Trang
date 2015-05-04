<?php 
    class M_khuyen_mai extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function ds_khuyen_mai()
        {
            $query= $this->db->get('khuyenmai');
            if($query->num_rows()==0){
                return false;
            }
            return $query->result_array();
            
        }
    }
?>