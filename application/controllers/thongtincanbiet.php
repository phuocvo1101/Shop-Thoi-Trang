<?php
    class thongtincanbiet extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelThongTinCanBiet/m_thong_tin_can_biet','mtt');
        }
        public function index()
        { 
            $id=$this->uri->segment(2);
              $thongtin1= $this->mtt->ds_loai_cha($id);
              if(!$thongtin1){
                redirect('Welcome');
              }
              $this->data['thongtin1']=$thongtin1;
            
            $this->data['path']=array('ViewThongTinCanBiet/cauhoithuonggap');
            $this->load->view('layout',$this->data);
        }
    }
 ?>
 