<?php
    class khuyenmai extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelKhuyenMai/m_khuyen_mai','mkh');
        }
        public function index()
        {
            $ds_km= $this->mkh->ds_khuyen_mai();
            if(!$ds_km){
                redirect('Welcome');
            }
            $this->data['dskm']=$ds_km;
            $this->data['path']=array('ViewKhuyenMai/khuyenmai');
            $this->load->view('layout',$this->data);
        }
    }
?>