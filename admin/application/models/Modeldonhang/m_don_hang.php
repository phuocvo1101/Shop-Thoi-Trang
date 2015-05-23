<?php
    class M_don_hang extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function tongsodonhang()
        {
           return $this->db->count_all('donhang');
        }
        public function danhsachdonhang($limit,$start)
        {
            $this->db->select('donhang.iddonhang, donhang.idkhachhang, donhang.trigiadonhang, khachhang.tenkhachhang')
            ->from('donhang')->join('khachhang','donhang.idkhachhang = khachhang.idkhachhang')->limit($limit,$start);
            $result=$this->db->get();
            if($result->num_rows()==0){
                return false;
            }
            return $result->result_array();
        }
        public function don_hang_id($id)
        {
            $this->db->where(array('iddonhang'=>$id));
            $result=$this->db->get('donhang');
             if($result->num_rows()==0){
                return false;
            }
            return $result->row_array();
        }
        public function chi_tiet_dh($id)
        {
            $this->db->where(array('iddonhang'=>$id));
            $result=$this->db->get('chitietdonhang');
             if($result->num_rows()==0){
                return false;
            }
            return $result->result_array();
        }
        public function them_dh($data)
        {
            return $this->db->insert('donhang',$data);
        }
        public function capnhat_dh($data)
        {
            $this->db->where(array('iddonhang'=>$data['iddonhang']));
            return $this->db->update('donhang',$data);
        }
        public function xoa_kh($id)
        {
            $this->db->where(array('iddonhang'=>$id));
            return $this->db->delete('donhang');
        }
       
    }
 ?>