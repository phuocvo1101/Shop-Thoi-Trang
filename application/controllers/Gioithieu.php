<?php
class Gioithieu extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['path']=array('Viewgioithieu/index') ;
        $this->load->view('layout',$this->data);
    }
}
?>
