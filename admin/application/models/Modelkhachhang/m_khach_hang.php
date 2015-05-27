<?php
    class M_khach_hang extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function tongsokhachhang()
        {
           return $this->db->count_all('khachhang');
        }
         public function ds_kh()
        {
            $result=$this->db->get('khachhang');
            if($result->num_rows()==0){
                return false;
            }
            return $result->result_array();
        }
        public function danhsachkhachhang($limit,$start,$filter="")
        {
            $elasticsearch= new ElasticSearch();
            $data= array('from'=>$start,'size'=>$limit);
            if(!empty($filter)){
                $data['query']=array(
                    'multi_match'=>array(
                     "query" => $filter,
                     "fields" => ["tenkhachhang", "dienthoai", "email"]
                    )
                );
            }
            
            $result= $elasticsearch->advancedquery('khachhang',json_encode($data));
           // echo '<pre>'.print_r($result,true).'</pre>';die();
           // $result=$this->db->get('khachhang',$limit,$start);
            //if($result->num_rows()==0){
             //   return false;
            //}
            if($result['hits']['total']==0){
                return false;
            }
            $result_arr= array();
            foreach($result['hits']['hits'] as $item){
                $result_arr[]= $item['_source'];
            }
            return array('data'=>$result_arr,'total'=>$result['hits']['total']);
            //return $result->result_array();
        }
        public function khach_hang_id($id)
        {
            $this->db->where(array('idkhachhang'=>$id));
            $result=$this->db->get('khachhang');
             if($result->num_rows()==0){
                return false;
            }
            return $result->row_array();
        }
        public function them_kh($data)
        {
            return $this->db->insert('khachhang',$data);
        }
        public function capnhat_kh($data)
        {
            $this->db->where(array('idkhachhang'=>$data['idkhachhang']));
            return $this->db->update('khachhang',$data);
        }
        public function xoa_kh($id)
        {
            $this->db->where(array('idkhachhang'=>$id));
            return $this->db->delete('khachhang');
        }
       
    }
 ?>