<?php
    class khachhang extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Modelkhachhang/m_khach_hang','mkh');
            $this->load->model('Modelkhachhang/m_kh');
             $this->load->model('Modelelasticsearch/m_elastic_search','mes');
        }
        public function danhsachkhachhang()
        {
            $this->load->library('pagination');
    
            $config['base_url'] = site_url().'khach-hang';
            $config['total_rows'] = $this->mkh->tongsokhachhang();
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
            $dskh= $this->mkh->danhsachkhachhang($config['per_page'],$start);
            $data['link']= $this->pagination->create_links();
            
            $data['title_ds']='Danh Sách khách hàng';
            $data['dskh']=$dskh;
            $data['path']=array('Viewkhachhang/doc_dskh');
            $this->load->view('layoutquantri',$data);
        }
        public function themkhachhang()
        {
            if($this->input->post('them') !=''){
                $this->load->library('form_validation');
                 $config = array(
                                    array('field' => 'tenkhachhang','label' => 'Tên khách hàng','rules' => 'required'),
                                    array('field' => 'diachikhachhang','label' => 'Địa chỉ khách hàng','rules' => 'required'),
                                    array('field' => 'diachigiaohang','label' => 'Địa chỉ giao hàng','rules' => 'required'),
                                    array('field' => 'email','label' => 'Email','rules' => 'required|valid_email|is_unique[khachhang.email]'),
                                    array('field' => 'dienthoai','label' => 'Điện thoại','rules' => 'required|numeric'),
            
        
                );
                
                $this->form_validation->set_message('required','<span style="color: red;">'.'%s không được trống'.'</span>');
                 $this->form_validation->set_message('numeric','<span style="color:red">%s phải là số</span>');  
                 $this->form_validation->set_message('valid_email','<span style="color:red">%s phải là đúng định dạng email</span>');  
                  $this->form_validation->set_message('is_unique','<span style="color:red">%s đã tồn tại</span>');           
                $this->form_validation->set_rules($config);
                 if($this->form_validation->run()){
                    $data= $this->input->post(null);
                    $this->m_kh->setKhachHang($data);
                    $kq=$this->mkh->them_kh($this->m_kh->getKhachHang());
                    if($kq){
                        $insert_id = $this->db->insert_id();
                        $khachhang=$this->mkh->khach_hang_id($insert_id);
                        $this->mes->createDataIndex('khachhang',$insert_id,$khachhang);
                        redirect('khach-hang');
                    }
                }
                
            }
            $data['title_bar']='Them Khach Hang';
            $data['path']=array('Viewkhachhang/themkhachhang');
            $this->load->view('layoutquantri',$data);
        }
        public function capnhatkhachhang()
        {
            $id= $this->uri->segment(3);
            if(!$id){
                redirect('khach-hang');
            }
            $khachhang= $this->mkh->khach_hang_id($id);
            
            if(!$khachhang){
                redirect('khach-hang');
            }
             if($this->input->post('capnhat') !=''){
                $khachhang= $this->input->post(null);       
                $khachhang['idkhachhang']=$id;
                $this->m_kh->setKhachHang($khachhang);
                $kq=$this->mkh->capnhat_kh($this->m_kh->getKhachHang());
                if($kq){
                    $khachhang=$this->mkh->khach_hang_id($id);
                    $this->mes->createDataIndex('khachhang',$id,$khachhang);
                    redirect('khach-hang');
                }
            }
            $data['khachhang']=$khachhang;
            $data['title_bar']='Cập Nhật Khách Hàng';
            $data['path']=array('Viewkhachhang/capnhatkhachhang');
            $this->load->view('layoutquantri',$data);
        }
        public function xoa()
        {
             $id= $this->uri->segment(3);
            if(!$id){
                redirect('khach-hang');
            }
            $khachhang= $this->mkh->khach_hang_id($id);
            if(!$khachhang){
                redirect('khach-hang');
            }
            $data['khachhang']=$khachhang;
            $data['title_bar']='Xóa Khách Hàng';
            $data['path']=array('Viewkhachhang/xoakhachhang');
            $this->load->view('layoutquantri',$data);
            
        }
         public function thuc_hien_xoa()
        {
             $id= $this->uri->segment(3);
        
            if(!$id){
                redirect('khach-hang');
            }
            $kq= $this->mkh->xoa_kh($id);
            if($kq==1){
                $this->mes->deleteDataIndex('khachhang',$id);
                $data['mms']= 'Xoa Thanh Cong';
            }else{
                 $data['mms']= 'Xoa khong Thanh Cong';
            }
            $data['path']=array('Viewkhachhang/thongbaoxoa');
            $this->load->view('layoutquantri',$data);
            
            
        }
        
    }
 ?>