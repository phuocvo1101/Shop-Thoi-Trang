<?php
class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_model','hmd');
    }
    public function index()
    {
        //$data['path']=array('Viewhome/index');
        //$this->load->view('layout',$data);
    }
    public function thongtin()
    {
        
        $id= $this->uri->segment(3);
        $home= $this->hmd->getHome($id); 
        if(!$home){
            redirect('home');
        }
        $this->data['thongtin']=$home;
        if($id=='gioithieu'){
            $title_bar='Giới Thiệu';
        }else{
            $title_bar='Liên Hệ';
        }
        $this->data['title_bar']=$title_bar;
        $this->data['path']=array('Viewhome/index');
        $this->load->view('layout',$this->data);
    }

}
?>