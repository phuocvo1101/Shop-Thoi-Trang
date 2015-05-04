<?php
class DiaChiShop extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDiaChi/m_dia_chi','mdc');
    }
    public function index()
    {
        $diachi= $this->mdc->ds_dia_chi_loai_cha();
        //echo '<prev>'.print_r($diachi).'</prev>';die();
        $this->data['diachi']=$diachi;
        $this->data['path']=array('ViewDiaChiShop/index');
        
        $this->load->view('layout',$this->data);
    }
}
?>