<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class SanPham extends REST_Controller
{
    protected  $redis;
    function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->redis= new RedisClient();
        $this->load->model('ModelSanPham/m_san_pham');
        $this->load->model('Modelelasticsearch/m_elastic_search','mes');
        // Configure limits on our controller methods. Ensure
        // you have created the 'limits' table and enabled 'limits'
        // within application/config/rest.php
        $this->methods['user_get']['limit'] = 500; //500 requests per hour per user/key
        $this->methods['user_post']['limit'] = 100; //100 requests per hour per user/key
        $this->methods['user_delete']['limit'] = 50; //50 requests per hour per user/key


    }


    public function indexdata_get()
    {
        //echo'jdjdj';die();
        $sanpham=$this->m_san_pham->dssp();
        if(count($sanpham)>0) {
            $this->mes->deleteType('sanpham');
        }
        
        foreach($sanpham as $item){
           // var_dump($item);die();
           $key='sp.'.$item['idsanpham'];
           $this->redis->set($key,$item);
            $this->mes->createDataIndex('sanpham',$item['idsanpham'],$item);
        }
        
        $this->response($sanpham,200);
    }
    public function list_get()
    {

        $users = array(
            1 => array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com', 'fact' => 'Loves swimming'),
            2 => array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com', 'fact' => 'Has a huge face'),
            3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => 'Is a Scott!', array('hobbies' => array('fartings', 'bikes'))),
        );
        if('email'=='') {
            $data = array('status'=>false,'message'=>'email is blank','error_code'=>'001.000');
            $this->response($data, 400);

        }

        $data = array('status'=>true,'data'=>$users);

        $this->response($data, 200); // 200 being the HTTP response code

    }
}
