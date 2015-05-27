<?php
class nguoidung extends CI_Controller
{
     protected  $redis;
    public function __construct()
    {
        
        parent::__construct();
        $this->redis = new RedisClient();
        $this->load->model('Modelnguoidung/m_nguoi_dung');
        $this->load->model('Modelnguoidung/m_nd');
        $this->load->model('Modelelasticsearch/m_elastic_search','mes');
    }
    public function index()
    {
        
    }
    public function danhsachnguoidung()
    {
        $this->load->library('pagination');

        $config['base_url'] = site_url().'nguoi-dung';
       // $config['total_rows'] = $this->m_nguoi_dung->tongsonguoidung();
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

        $page= $this->uri->segment(2)?$this->uri->segment(2):1;
        $start= ($page-1)*$config['per_page'];
        if(!isset($filter)){
            $fiter='';
        }
        if($this->input->post('ok')){
            $this->session->unset_userdata('filter');
            $search = $this->input->post('search');
            $this->session->set_userdata('filter',$search);
        }
        $filter= $this->session->userdata('filter');
        
        $dsnd= $this->m_nguoi_dung->danhsachnguoidung($config['per_page'],$start,$filter);
         $config['total_rows'] =$dsnd['total'];
       
        $this->pagination->initialize($config);
        
        $data['link']= $this->pagination->create_links();
        $data['txtTim']= $filter;
        $data['title_ds']='Danh Sách người dùng';
        $data['dsnd']=$dsnd['data'];
        $data['path']=array('Viewnguoidung/doc_dsnd');
        $this->load->view('layoutquantri',$data);
    }
    public function themnguoidung()
    {
        if($this->input->post('them') !=''){
            $this->load->library('form_validation');
             $config = array(
                                array('field' => 'ten_nguoi_dung','label' => 'Họ Tên','rules' => 'required'),
                                array('field' => 'tendn','label' => 'Tên đăng nhập','rules' => 'required|is_unique[nguoidung.tendn]'),
                                array('field' => 'email','label' => 'Email','rules' => 'required|valid_email|is_unique[nguoidung.email]'),
                                array('field' => 'mat_khau','label' => 'Mật khẩu','rules' => 'required'),
                                array('field' => 'mat_khau_xac_nhan','label' => 'Xác nhận mật khẩu','rules' => 'required|matches[mat_khau]'),
                                array('field' => 'phone','label' => 'Điện thoại','rules' => 'required|numeric'),
                                array('field' => 'ngay_sinh','label' => 'Ngày sinh','rules' => 'required'),
    
            );
            
            $this->form_validation->set_message('required','<span style="color: red;">'.'%s không được trống'.'</span>');
             $this->form_validation->set_message('numeric','<span style="color:red">%s phải là số</span>');  
             $this->form_validation->set_message('valid_email','<span style="color:red">%s phải là đúng định dạng email</span>'); 
             $this->form_validation->set_message('matches','<span style="color:red">%s phải là trùng với %s</span>');   
              $this->form_validation->set_message('is_unique','<span style="color:red">%s đã tồn tại</span>');           
            $this->form_validation->set_rules($config);
             if($this->form_validation->run()){
                $data= $this->input->post(null);
                $this->m_nd->setNguoiDung($data);
                $kq=$this->m_nguoi_dung->them_nd($this->m_nd->getNguoiDung());
                if($kq){
                    $insert_id = $this->db->insert_id();
                    $nguoidung=$this->m_nguoi_dung->nguoi_dung_id($insert_id);
                    //var_dump($nguoidung);die();
                    $key= 'nd.'.$insert_id;
                    $key1='ndu.'.$nguoidung['tendn'];
                    $this->redis->set($key,$nguoidung);
                     $this->redis->set($key1,$insert_id);
                    $this->mes->createDataIndex('nguoidung',$insert_id,$nguoidung);
                    redirect('nguoi-dung');
                }
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
        $key= 'nd.'.$id;
        $nguoidung= $this->redis->get($key);
        if($nguoidung==null){
            $nguoidung= $this->m_nguoi_dung->nguoi_dung_id($id);
            $this->redis->set($key,$nguoidung);
        }
        
        
        if(!$nguoidung){
            redirect('nguoi-dung');
        }
         if($this->input->post('capnhat') !=''){
            $nguoidung= $this->input->post(null);       
            $nguoidung['ma_nguoi_dung']=$id;
            $this->m_nd->setNguoiDung($nguoidung);
            $kq=$this->m_nguoi_dung->capnhat_nd($this->m_nd->getNguoiDung());
            if($kq){
                $nguoidung=$this->m_nguoi_dung->nguoi_dung_id($id);
                $this->redis->set($key,$nguoidung);
                $this->mes->createDataIndex('nguoidung',$id,$nguoidung);
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
             $key= 'nd.'.$id;
            $this->redis->del($key);
            $this->mes->deleteDataIndex('nguoidung',$id);
            $data['mms']= 'Xoa Thanh Cong';
        }else{
             $data['mms']= 'Xoa khong Thanh Cong';
        }
        $data['path']=array('Viewnguoidung/thongbaoxoa');
        $this->load->view('layoutquantri',$data);
        
        
    }
}
 ?>