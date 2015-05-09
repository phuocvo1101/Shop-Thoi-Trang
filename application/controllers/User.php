<?php if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
class User extends MY_Controller
{
    public function __construct()
    {
       parent::__construct();
    }
        /*
     * Phuong thuc dang ky thanh vien
    */
    public function register()
    {
       //load thu vien validation
       $this->load->library('form_validation');
       $this->load->helper('form');
 
       //tao cac tap luat
           //email:  bắt buộc - đúng định dạng email
       $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
           //name:  bắt buộc - tối thiểu 8 ký tự
       $this->form_validation->set_rules('usernam', 'Tên đăng nhập', 'required|min_length[8]|xss_clean');
           //phone:  bắt buộc - tối thiểu 8 ký tự - phai la số
       $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]|numeric');
           //re_password:  bắt buộc - phải giống với password
       $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');
       //chạy và kiểm tra các tập luật
       if($this->form_validation->run())
       {
                //các dữ liệu nhập hợp lệ
                //đăng ký thành viên thành công
        }
      //hiển thị view
      $this->data['path']=array('User/dangkythanhvien');
      $this->load->view('layout',$this->data);
      }
}