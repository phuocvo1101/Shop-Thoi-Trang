<?php if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
class User extends MY_Controller
{
    protected $redis;
    public function __construct()
    {
       parent::__construct();
       $this->load->library('cart');
       $this->load->library('session');
       $this->load->model('ModelUser/m_user');
       $this->redis = new RedisClient();
    }
    
    public function register()
    {
       //load thu vien validation
       $this->load->library('form_validation');
       $this->load->helper('form');
 
       //tao cac tap luat
       $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_email');
       $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required|min_length[4]|callback_check_username');
       $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
       $this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu', 'required|matches[password]');
       if($this->form_validation->run())
       {
            $data = array(
               'username' => $this->input->post('username'),
               'email' => $this->input->post('email'),
               'password' => md5($this->input->post('password'))
            );
           //them thanh vien vao trong csdl
           $this->m_user->create($data);
           $user=$this->m_user->get_user_info($this->input->post('username'),md5($this->input->post('password')));
           $this->session->set_userdata('login', $user);
            $this->session->set_flashdata('flash_message', 'Dang ky thanh vien thanh cong');
            redirect('user/thongtinkhachhang');//den trang thong tin khach hang
        }
      //hiển thị view
      $this->data['path']=array('User/dangkythanhvien');
      $this->load->view('layout',$this->data);
      }
      public function login()
      {
       //load thu vien validation
       $this->load->library('form_validation');
       $this->load->helper('form');
        
        //tao cac tap luat
       $this->form_validation->set_rules('user_email', 'Tên đăng nhập or Email', 'required');
       $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
       //$this->form_validation->set_rules('login', 'Đăng nhập', 'callback_check_login');
        
       if($this->form_validation->run())
       {
            //lay du lieu tu form post sang
            $user_email = $this->input->post('user_email');
            $password = $this->input->post('password');
            $password = md5($password);
            //$where = array('email' => $user_email, 'password' => $password);
            //lay thong tin thanh vien
          
            $user=$this->m_user->get_user_info($user_email,$password);
            //var_dump ($user);die();
            if($user){
               
                //luu thong tin thanh vien vao session
            $this->session->set_userdata('login', $user);
            //tạo thông báo
            $mss= 'Đăng nhập thành công';
            redirect('user/thongtinkhachhang');//chuyen toi trang chu
            }
            if(!$user){
                $mss= 'Đăng nhập không thành công. Username email hoặc password không đúng';
            }
            $this->data['mss']= $mss;
                     
       }
        
       //gui du lieu sang view
        $this->data['path']=array('User/dangkythanhvien');
        $this->load->view('layout',$this->data);
        }

      function check_email()
      {
         
            $email = $this->input->post('email');
            //kiểm tra điều kiện email có tồn tại trong csdl hay không
            $check_email=$this->m_user->check_exists_email($email);
            if($check_email)
            {
                 //trả về thông báo lỗi nếu đã tồn tại email này
             $this->form_validation->set_message(__FUNCTION__, 'Email đã sử dụng');
                 return false;
            }
            return true;
        }
      function check_username()
      {        
            $username = $this->input->post('username');
            //kiểm tra điều kiện username có tồn tại trong csdl hay không
            $check_username=$this->m_user->check_exists_username($username);
            if($check_username)
            {
                 //trả về thông báo lỗi nếu đã tồn tại email này
             $this->form_validation->set_message(__FUNCTION__, 'Username đã sử dụng');
                 return false;
            }
            return true;
        }
        
    public function check_login()
    {
        //lay du lieu tu form
        $email_username = $this->input->post('user_email');
        $password = $this->input->post('password');
        $password = md5($password);
        //$where = array('email' => $email, 'password' => $password);
        if($this->m_user->check_login($email_username,$password));
        {
             //trả về thông báo lỗi nếu đã tồn tại email này
            $mss= 'Đăng nhập không thành công, Tên đăng nhập đã tồn tại';
            $this->data['mss']= $mss;
            return false;
        }
        return true;
    }
     /*
    * Phuong thuc dang nhap
    */
    

     // Kiểm tra đã đăng nhập hay chưa
        private function _user_is_login()
        {
            $user_data = $this->session->userdata('login');
            //neu chua login
            if(!$user_data)
            {
                return false;
            }
            return true;
        }
         public function logout()
        {
            $this->session->unset_userdata('login');
            $this->session->set_flashdata('flash_message', 'Đăng xuất thành công');
            redirect();
        }

      public function thongtinkhachhang()
      {
        $this->load->library('form_validation');
       $this->load->helper('form');
 
       //tao cac tap luat
       $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
       $this->form_validation->set_rules('tenkhachhang', 'Họ Tên Khách Hàng', 'required');
        $this->form_validation->set_rules('diachikhachhang', 'Địa Chỉ Khách Hàng', 'required');
       $this->form_validation->set_rules('diachigiaohang', 'Địa Chỉ Giao Hàng', 'required');
       $this->form_validation->set_rules('dienthoai', 'Điện Thoại', 'required|numeric|min_length[6]|max_length[12]');
       //chạy và kiểm tra các tập luật
       if($this->form_validation->run())
       {
            //$redis = new RedisClient();
              $data = array(
               'tenkhachhang' => $this->input->post('tenkhachhang'),
               'diachikhachhang' => $this->input->post('diachikhachhang'),
               'diachigiaohang' => $this->input->post('diachigiaohang'),
               'email' =>$this->input->post('email'),
               'dienthoai'=>$this->input->post('dienthoai'),
               'phai'=>$this->input->post('gioitinh')=='on'?1:0
            );
           $this->redis->set('khachhang',$data);
            redirect('user/hoadonkhachhang');
        }
        if($this->session->userdata('login')){
            $this->data['user']=$this->session->userdata('login');
        }
         $this->data['path']=array('User/thongtinkhachhang');
         $this->load->view('layout',$this->data);
      }
      public function hoadonkhachhang()
      {
        $khachhang= $this->redis->get('khachhang');
         $data=$this->cart->contents();
        $tongtien=$this->cart->total();
       
        $this->data['khachhang']=$khachhang;
        $this->data['giohang']=$data;
        $this->data['tongtien']=$tongtien;
        $this->data['path']=array('User/hoadonkhachhang');
         $this->load->view('layout',$this->data);
      }
      public function hoantatdonhang()
      {
        $data_kh= $this->redis->get('khachhang');
        //tao khach hang
        $this->m_user->create_khachhang($data_kh);
        //lay id khach hang
        $kh_last= $this->m_user->get_khachhang_last();
        //tao don hang
        $data= array(
        'idkhachhang'=> $kh_last['idkhachhang'],
        'trigiadonhang'=>$this->cart->total()
        );
        $this->m_user->create_donhang($data);
         //lay id don hang
        $dh_last= $this->m_user->get_donhang_last();
        //danh sach don hang
        $ds_cart= $this->cart->contents();
        foreach($ds_cart as $sp){
            $donhang=array(
            'iddonhang'=>$dh_last['iddonhang'],
            'idsanpham'=> $sp['id'],
            'soluong'=> $sp['qty'],
            'dongia'=> $sp['price'],
            'thanhtien'=>$sp['subtotal']
            );
            $this->m_user->create_chitietdonhang($donhang);
        }
        
        $this->redis->del('khachhang');
        $this->session->sess_destroy();
        
         redirect('');
      }
}