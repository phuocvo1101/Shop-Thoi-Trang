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
       // $redis = new RedisClient();
      
      // $array = array('quang1'=>'test1','quang2'=>'test2','quang3'=>'test3');
       // $redis->set('quang',$array);
     // $result  =  $redis->get('quang');
      // $redis->set('code','123456');
        //$result  =  $redis->get('code');
    // $result = $redis->del('code');
       //var_dump($result);
        //die();
       // echo $this->cache->redis->get('kh');
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
