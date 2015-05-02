<?php
class loaisanpham extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSanPham/m_san_pham','msp');
    }
    public function index()
    {
        
    }
    public function sanpham()
    {
        $id=$this->uri->segment(3);
        if(!$id){
            redirect('Welcome');
        }
        $loaisanpham= $this->msp->lsp_id($id);
        $sanpham = $this->msp->sp_id($id);
         if(!$sanpham){
            redirect('Welcome');
        }
       // echo '<pre>'.print_r($loaisanpham,true).'</pre>';die();
       $this->data['loaisanpham']=$loaisanpham;
        $this->data['sanpham']=$sanpham;
         $this->data['path']=array('Viewloaisanpham/contentsanpham') ;
        $this->load->view('layout',$this->data);
    }
    public function sanphammoi()
    {
        $spmoi= $this->msp->sp_moi();
        if(!$spmoi){
            redirect('Welcome');
        }
        //echo '<pre>'.print_r($spmoi,true).'</pre>';die();
        $this->data['spmoi']=$spmoi;
        $this->data['path']=array('welcome_message') ;
        $this->load->view('layout',$this->data);
    }
   
}
?>