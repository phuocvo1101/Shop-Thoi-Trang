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
        $this->load->library('pagination');
        $id=$this->uri->segment(3);
        if(!$id){
            redirect('Welcome');
        }
        //cau hinh phan trang
        $config['base_url'] = base_url('loaisanpham/sanpham/'.$id); // xác định trang phân trang
        $config['total_rows'] = count($this->msp->sp_id($id)); // xác định tổng số recor
        $config['per_page'] = 2; // xác định số record ở mỗi trang
        $config['uri_segment'] = 4; // xác định segment chứa page number
        $this->pagination->initialize($config); 
        $page= ($this->uri->segment(4)? $this->uri->segment(4):0);
        //echo $page;die();
        $sanpham=$this->msp->sp_id_phantrang($id,$config['per_page'],$page);
        if(!$sanpham){
            redirect('Welcome');
        }
        $links=$this->pagination->create_links();             
        $loaisanpham= $this->msp->lsp_id($id);         
       $loaisanpham= $this->msp->lsp_id($id);
       
        $this->data['links']=$links;
        $this->data['loaisanpham']=$loaisanpham;
        $this->data['sanpham']=$sanpham;
        $this->data['path']=array('Viewloaisanpham/contentsanpham') ;
        $this->load->view('layout',$this->data);
    }
    public function chitietsanpham()
    {
        $id= $this->uri->segment(3);
        $idloaisanpham= $this->uri->segment(4);
        $chitietsp= $this->msp->chi_tiet_sp_id($id);
        if(!$chitietsp){
            redirect('Welcome');
        }
      
        $sanphamcungloai= $this->msp->sp_cung_loai($id,$idloaisanpham); 
        $this->data['spcungloai']=$sanphamcungloai;
        $this->data['chitietsp']=$chitietsp;
        $this->data['path']=array('ViewShop/index');
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