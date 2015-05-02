<?php
class quantri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        //$data['path']=array('Viewhome/index');
        $this->load->view('layoutadmin');
    }
}
?>