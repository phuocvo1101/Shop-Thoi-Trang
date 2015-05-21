<?php
class nguoidung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modelnguoidung/m_nguoi_dung');
        $this->load->model('Modelnguoidung/m_nd');
    }
    public function index()
    {
        
    }
    public function danhsachnguoidung()
    {
        $this->load->library('pagination');

        $config['base_url'] = site_url().'nguoi-dung';
        $config['total_rows'] = $this->m_nguoi_dung->tongsonguoidung();
        $config['per_page'] = 4;
        $config['uri_segment'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['suffix'] = '.html';
        
        $config['first_link'] = '|<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_url'] = '';
        $config['last_link'] = '>|';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        
       
        $this->pagination->initialize($config);
        $page= $this->uri->segment(2)?$this->uri->segment(2):1;
        $start= ($page-1)*$config['per_page'];
        $dsnd= $this->m_nguoi_dung->danhsachnguoidung($config['per_page'],$start);
        $data['link']= $this->pagination->create_links();
        
        $data['title_ds']='Danh Sách người dùng';
        $data['dsnd']=$dsnd;
        $data['path']=array('Viewnguoidung/doc_dsnd');
        $this->load->view('layoutquantri',$data);
    }
    public function themnguoidung()
    {
        if($this->input->post('them') !=''){
            $data= $this->input->post(null);
            $this->m_nd->setNguoiDung($data);
            $kq=$this->m_nguoi_dung->them_nd($this->m_nd->getNguoiDung());
            if($kq){
                redirect('nguoi-dung');
            }
        }
        $data['loainguoidung']=$this->m_nguoi_dung->loai_nguoi_dung();
        $data['title_bar']='Them nguoi dung';
        $data['path']=array('Viewnguoidung/them');
        $this->load->view('layoutquantri',$data);
    }
    public function capnhatnguoidung()
    {
        $id= $this->uri->segment(3);
        if(!$id){
            redirect('nguoi-dung');
        }
        $nguoidung= $this->m_nguoi_dung->nguoi_dung_id($id);
        
        if(!$nguoidung){
            redirect('nguoi-dung');
        }
         if($this->input->post('capnhat') !=''){
            $nguoidung= $this->input->post(null);       
            $nguoidung['ma_nguoi_dung']=$id;
            $this->m_nd->setNguoiDung($nguoidung);
            $kq=$this->m_nguoi_dung->capnhat_nd($this->m_nd->getNguoiDung());
            if($kq){
                redirect('nguoi-dung');
            }
        }
        $data['nguoidung']=$nguoidung;
        $data['loainguoidung']=$this->m_nguoi_dung->loai_nguoi_dung();
        $data['title_bar']='Cập Nhật Người Dùng';
        $data['path']=array('Viewnguoidung/capnhat');
        $this->load->view('layoutquantri',$data);
    }
    public function xoa()
    {
         $id= $this->uri->segment(3);
        if(!$id){
            redirect('nguoi-dung');
        }
        $nguoidung= $this->m_nguoi_dung->nguoi_dung_id($id);
        if(!$nguoidung){
            redirect('nguoi-dung');
        }
        $data['nguoidung']=$nguoidung;
        $data['loainguoidung']=$this->m_nguoi_dung->loai_nguoi_dung();
        $data['title_bar']='Xóa Người Dùng';
        $data['path']=array('Viewnguoidung/xoa');
        $this->load->view('layoutquantri',$data);
        
    }
     public function thuc_hien_xoa()
    {
         $id= $this->uri->segment(3);
    
        if(!$id){
            redirect('nguoi-dung');
        }
        $kq= $this->m_nguoi_dung->xoa_nd($id);
        if($kq==1){
            $data['mms']= 'Xoa Thanh Cong';
        }else{
             $data['mms']= 'Xoa khong Thanh Cong';
        }
        $data['path']=array('Viewnguoidung/thongbaoxoa');
        $this->load->view('layoutquantri',$data);
        
        
    }
}
 ?>