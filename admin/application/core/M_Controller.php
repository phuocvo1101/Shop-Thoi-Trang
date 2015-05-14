<?php
/**
 * Created by PhpStorm.
 * User: ph
 * Date: 5/14/15
 * Time: 8:33 AM
 */

class M_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
         //$this->load->library('session');
        $this->checkLogin();

    }

    public function checkLogin()
    {
        // check session ton tai chua
        // neu chua ton tai redirect login
        //$this->session->set_userdata('clogin','abc'); die();
         $user = $this->session->userdata('clogin');
        //var_dump($user);die();
         //$this->session->sess_destroy();
        if($this->uri->segment(1)){
            $controllerName = $this->uri->segment(1);
        }
        
        if(!isset($user) && $controllerName!="login") {
             redirect('login');
        }

    }
}