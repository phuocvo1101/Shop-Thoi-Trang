<?php
class M_san_pham extends CI_Model
{
    public function dssp()
    {
        $query=$this->db->get('sanpham');
        if($query->num_rows()>0){
            return $query->result_array();
        }
        return false;
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
        //$this->db->where(array('idloaisanpham'=>$id));
       // $this->db->select('*');
       // $this->db->from('sanpham');
        //$this->db->join('hinhanh','hinhanh.idhinhanh=sanpham.idhinhanh');
        $this->db->select('*')->from('sanpham')->join('hinhanh','hinhanh.idhinhanh=sanpham.idhinhanh')->where(array('idloaisanpham'=>$id));
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        return false;
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
         //$this->db->where(array('sanphammoi'=>'1'));
        // $this->db->select('*');
        //$this->db->from('sanpham');
        //$this->db->join('hinhanh','hinhanh.idhinhanh=sanpham.idhinhanh');
        $this->db->select('*')->from('sanpham')->join('hinhanh','hinhanh.idhinhanh=sanpham.idhinhanh')->where(array('sanphammoi'=>'1'));
        $query=$this->db->get();
        if($query->num_rows()>0){
            return $query->result_array();
        }
        return false;
    }
    public function sp_cung_loai($id, $idloaisanpham)
    {
         $this->db->where(array('idloaisanpham'=>$idloaisanpham,'idsanpham !='=>$id));
         $query=$this->db->get('sanpham');
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