<?php
class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
           $this->cache->is_supported('redis');
        $this->load->library('cart');
        $this->load->model('ModelLoaiSanPham/m_loai_sp','mlsp');
         $this->load->model('ModelThongTinCanBiet/m_thong_tin_can_biet','mtt');
        
         $thongtin= $this->mtt->ds_loai_cha();
        // echo '<pre>'.print_r($thongtin).'</prev>';die();
         $this->data['thongtin']=$thongtin;
            
        $kq=$this->mlsp->ds_loai_cha();
        $this->data['kq'] = $kq;
        
        $dm_sp= $this->mlsp->get_dm_sp();
        $this->data['dmsp']=$dm_sp;
        $tongsanpham = $this->cart->total_items();
        $tongtien=$this->cart->total();
        $this->data['tongsp']=$tongsanpham;
        $this->data['tongtien']=$tongtien;
        

    }

}
?>