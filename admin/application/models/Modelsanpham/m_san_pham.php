<?php
    class  M_san_pham extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function tongsosanpham()
        {
            return $this->db->count_all('sanpham');
        }
        public function dssp_phantrang($limit, $start)
        {
            $result=$this->db->get('sanpham',$limit,$start);
            if($result->num_rows()==0){
                return false;
            }
            return $result->result_array();
        }
        public function sp_id($id)
        {
            $this->db->where(array('idsanpham'=>$id));
            $result= $this->db->get('sanpham');
            if($result->num_rows()==0){
                return false;
            }
            return $result->row_array();
        }
        public function them_sp($data)
        {
            return $this->db->insert('sanpham',$data);
        }
        public function capnhat_sp($data)
        {
            $this->db->where(array('idsanpham'=>$data['idsanpham']));
            return $this->db->update('sanpham',$data);
        }
        public function xoa_sp($id)
        {
            $this->db->where(array('idsanpham'=>$id));
            return $this->db->delete('sanpham');
        }
    }
 ?>