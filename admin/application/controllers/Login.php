<?php
class Login extends M_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
       $this->load->view('layoutlogin');
    }
}
?>