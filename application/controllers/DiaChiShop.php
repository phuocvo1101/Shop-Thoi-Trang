<?php
class DiaChiShop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['path']=array('ViewDiaChiShop/index');
        $this->load->view('layout',$data);
    }
}
?>