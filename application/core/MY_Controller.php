<?php
class MY_Controller extends CI_Controller
{
    protected $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLoaiSanPham/m_loai_sp','mlsp');
        
        $kq=$this->mlsp->ds_loai_cha();
        $this->data['kq'] = $kq;
        
        $dm_sp= $this->mlsp->get_dm_sp();
        $this->data['dmsp']=$dm_sp;

    }

}
?>