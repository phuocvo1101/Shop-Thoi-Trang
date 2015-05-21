<?php
    class  M_loai_san_pham extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function loaisp_select()
        {
            $result=$this->db->get('loaisanpham');
            if($result->num_rows()==0){
                return false;
            }
            return $result->result_array();
        }
    }
 ?>