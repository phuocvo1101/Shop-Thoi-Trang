<?php
    class M_khach_hang extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function tongsokhachhang()
        {
           return $this->db->count_all('khachhang');
        }
         public function ds_kh()
        {
            $result=$this->db->get('khachhang');
            if($result->num_rows()==0){
                return false;
            }
            return $result->result_array();
        }
        public function danhsachkhachhang($limit,$start)
        {
            $result=$this->db->get('khachhang',$limit,$start);
            if($result->num_rows()==0){
                return false;
            }
            return $result->result_array();
        }
        public function khach_hang_id($id)
        {
            $this->db->where(array('idkhachhang'=>$id));
            $result=$this->db->get('khachhang');
             if($result->num_rows()==0){
                return false;
            }
            return $result->row_array();
        }
        public function them_kh($data)
        {
            return $this->db->insert('khachhang',$data);
        }
        public function capnhat_kh($data)
        {
            $this->db->where(array('idkhachhang'=>$data['idkhachhang']));
            return $this->db->update('khachhang',$data);
        }
        public function xoa_kh($id)
        {
            $this->db->where(array('idkhachhang'=>$id));
            return $this->db->delete('khachhang');
        }
       
    }
 ?>