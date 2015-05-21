<?php
class Quantri extends M_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['path']=array('Viewnguoidung/hethongquantri');
        $this->load->view('layoutquantri',$data);
    }
    public function logout()
    {
      $data= array('ten_nguoi_dung','tendn');
      $this->session->unset_userdata($data);
      redirect('');
    }
}
?>