<?php
class sanpham extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        define('HINH','http://catsashop.local/');
        $this->load->model('Modelsanpham/m_san_pham');
        $this->load->model('Modelsanpham/m_sp');
        $this->load->model('Modelloaisanpham/m_loai_san_pham');
        
    }
    public function index()
    {
        
    }
    public function danhsach()
    {
        $this->load->library('pagination');

        $config['base_url'] = site_url().'san-pham';
        $config['total_rows'] = $this->m_san_pham->tongsosanpham();
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
        $dssp= $this->m_san_pham->dssp_phantrang($config['per_page'],$start);
        $data['link']= $this->pagination->create_links();
        
        $data['title_ds']='Danh Sách Sản Phẩm';
        $data['dssp']=$dssp;
        $data['path']=array('Viewsanpham/doc_dssp');
        $this->load->view('layoutquantri',$data);
    }
    public function themsanpham()
    {
        if($this->input->post('submit')){
            $this->load->library('form_validation');
             $config = array(
                                array('field' => 'tensanpham','label' => 'Tên sản phẩm','rules' => 'required'),
                                array('field' => 'dongia','label' => 'Đơn giá','rules' => 'required|numeric'),
                                array('field' => 'tensanphamurl','label' => 'Tên URL','rules' => 'required')
            );
            $this->form_validation->set_message('required','<span style="color: red;">'.'%s không được trống'.'</span>');
             $this->form_validation->set_message('numeric','<span style="color:red">%s phải là số</span>');           
            $this->form_validation->set_rules($config);
            if($this->form_validation->run()){
                //thuc hien upload file
                $config['upload_path'] ='./public/images/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = 30000000;
                $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('hinh')){
                        $data['err']= $this->upload->display_errors();
                }
                else{
                    $data =$this->upload->data();
                    $file_name = $data['file_name'];
                    $data=$this->input->post(null);
                    $data['hinh']=$file_name;
                    $this->m_sp->setData($data);
                    $kq=$this->m_san_pham->them_sp($this->m_sp->getData());
                    if($kq){
                            redirect('san-pham');
                    }  
                }
                
            }
        }
        $data['lspselect']=$this->m_loai_san_pham->loaisp_select();
        $data['path']=array('Viewsanpham/them_san_pham');
        $this->load->view('layoutquantri',$data);
    }
    public function capnhat()
    {
        $id= $this->uri->segment(3);
        $sanpham= $this->m_san_pham->sp_id($id);
        if($this->input->post('capnhat')){
            $sanpham= $this->input->post(null);
            $sanpham['idsanpham']= $id;
            $hinh=$this->input->post('hinh');
            if($hinh==''){
                $hinh= $this->input->post('hinhanh');
            }
            $sanpham['hinh']= $hinh;
            
            $this->m_sp->setData($sanpham);
             $kq=$this->m_san_pham->capnhat_sp($this->m_sp->getData($sanpham));
             if($kq){
                redirect('san-pham');
             }
            
        }
        $data['sanpham']=$sanpham;
        $data['lspselect']=$this->m_loai_san_pham->loaisp_select();
        $data['path']=array('Viewsanpham/capnhatsanpham');
        $this->load->view('layoutquantri',$data);
    }
    public function xoa()
    {
        $id= $this->uri->segment(3);
        $sanpham= $this->m_san_pham->sp_id($id);
         $data['sanpham']=$sanpham;
        $data['lspselect']=$this->m_loai_san_pham->loaisp_select();
        $data['path']=array('Viewsanpham/xoasanpham');
        $this->load->view('layoutquantri',$data);
    }
    public function thuchienxoa()
    {
         $id= $this->uri->segment(3);
         $kq= $this->m_san_pham->xoa_sp($id);
         if($kq){
            $data['mss']='Xóa sản phẩm thành công';
         }else{
            $data['mss']='Xóa sản phẩm không thành công';
         }
         $data['path']=array('Viewsanpham/thongbaoxoa');
        $this->load->view('layoutquantri',$data);
    }
}
 ?>