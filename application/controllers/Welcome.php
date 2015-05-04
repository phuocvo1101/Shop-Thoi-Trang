<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
    
      public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSanPham/m_san_pham','msp');

    }
    public function index()
    {
        $spmoi= $this->msp->sp_moi();
        $dssplimit=$this->msp->dssplimit();
        if(!$spmoi){
            redirect('Welcome');
        }
        //echo '<prev>'.print_r($dssplimit,true).'</prev>';die();
        $this->data['spmoi']=$spmoi;
        $this->data['dssplimit']=$dssplimit;
        $this->data['path']=array('Viewloaisanpham/danhmucsanpham','welcome_message');
        $this->load->view('layout',$this->data);
    }

}
