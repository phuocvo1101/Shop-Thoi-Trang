<?php
class Shop extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['path']=array('ViewShop/index');
        $this->load->view('layout',$this->data);
    }
}
?>