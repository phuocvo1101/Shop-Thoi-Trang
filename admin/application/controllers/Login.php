<?php
class Login extends M_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modelnguoidung/m_nguoi_dung');
        
    }
    public function index()
    {
        if($this->input->post('submit')){
            $this->load->library('form_validation');
            $config = array(
                                array('field' => 'username','label' => 'Tên đăng nhập','rules' => 'required'),
                                array('field' => 'passwd','label' => 'Mật khẩu','rules' => 'required')
            );
            $this->form_validation->set_message('required','%s không được trống');
            
            $this->form_validation->set_rules($config);
            if($this->form_validation->run()){
                $data= $this->input->post(null);
                $nguoidung= $this->m_nguoi_dung->nguoi_dung_dang_nhap($data['username'],$data['passwd']);
                if(!$nguoidung){
                    $data['err']= 'Tên hoặc mật khẩu không đúng';
                    return redirect('login');
                }
                $data_dn= array(
                'tendn'=>$nguoidung['tendn'],
                'ten_nguoi_dung'=>$nguoidung['ten_nguoi_dung'],
                );
                $this->session->set_userdata($data_dn);
                redirect('');
            }
            
            
        }
        if($this->session->userdata('ten_nguoi_dung')){
            redirect ('');
        }
        
        $this->load->view('layoutlogin');
    }
}
?>