<?php
class M_san_pham extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function dssp()
    {
        $query=$this->db->get('sanpham');
        if($query->num_rows()>0){
            return $query->result_array();
        }
        return false;
    }
    public function ds_size()
    {
        $query= $this->db->get('size');
        return $query->result_array();
        
    }
    public function dssplimit()
    {
        $this->db->select('*')->from('sanpham')
        ->order_by('idsanpham','desc')->limit(5);
        $query=$this->db->get();
        if($query->num_rows()==0){
            return false;
        }
        return $query->result_array();
        
    }
    public function sp_phantrang($limit,$start)
    {
        
        $query=$this->db->get('sanpham',$limit,$start);
        if($query->num_rows()>0){
            return $query->result_array();
        }
        return false;
    }
    public function sp_id($id)
    {
        $this->db->select('*')->from('sanpham')
        ->where(array('idloaisanpham'=>$id));
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        return false;
    }
    public function chi_tiet_sp_id($id)
    {      
        $this->db->select('*')->from('sanpham')
        ->where(array('idsanpham'=>$id));
        $query= $this->db->get();
         if($query->num_rows()==0){
             return false;            
        }
        return $query->row_array();
    }
    public function sp_id_phantrang($id,$limit,$start)
    {
        $this->db->select('*')->from('sanpham')
        ->where(array('idloaisanpham'=>$id))->limit($limit,$start);
        $query=$this->db->get();
        if($query->num_rows()==0){
             return false;            
        }
        return $query->result_array();
       
    }
     public function lsp_id($id)
    {
        $this->db->where(array('idloaisanpham'=>$id));
        $query=$this->db->get('loaisanpham');
        if($query->num_rows()>0){
            return $query->row_array();
        }
        return false;
    }
    public function sp_moi()
    {
        $this->db->select('*')->from('sanpham')->where(array('sanphammoi'=>'1'))->order_by('rand()')->limit(4);
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        return false;
    }
    public function sp_cung_loai($id, $idloaisanpham)
    {
           
        $this->db->select('*')->from('sanpham')
        ->where(array('idloaisanpham'=>$idloaisanpham,'idsanpham !='=>$id))->order_by('rand()')->limit(2);
        $query= $this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        return false;
    }
    public function sp_ban_chay()
    {
        
    }
    public function them_sp($data)
    {
        return $this->db->insert($data);
    }
    public function cap_nhat_sp($data)
    {
        $this->db->where(array('idsanpham'=>$data['idsanpham']));
          return $this->db->update($data);
    }
    public function xoa_sp($data)
    {
         $this->db->where(array('idsanpham'=>$data['idsanpham']));
          return $this->db->delete($data);
    }
   
    
}
?>