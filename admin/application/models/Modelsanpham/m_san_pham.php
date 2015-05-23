<?php
    class  M_san_pham extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function tongsosanpham()
        {
             $elasticsearch = new M_elastic_search();
             $result = $elasticsearch->advancedquery('sanpham',array());
            // var_dump($result);die();
            //echo '<pre>'.print_r($result,true).'</pre>';die();
            return $result['hits']['total'];
            //return $this->db->count_all('sanpham');
        }
        public function dssp_phantrang($limit, $start,$filter='')
        {
          
             $elasticsearch = new M_elastic_search();
             $data = array('from'=>$start,'size'=>$limit);
            if(!empty($filter)) {
                $data['query'] = array(
                     'multi_match' => array(
                          "query" => $filter,
                          "fields" => array('tensanpham')
                     )
                );
            }
             $result = $elasticsearch->advancedquery('sanpham',json_encode($data));
    //echo '<pre>'.print_r($result,true).'</pre>';die();
            //$result=$this->db->get('sanpham',$limit,$start);
            //if($result->num_rows()==0){
           //     return false;
           // }
         //  var_dump($result);die();
           if($result['hits']['total']==0) {
            return false;
           }
          
           $arrary_result = array_map(function($e){
              return $e['_source'];
           },$result['hits']['hits']);
          
           //echo '<pre>'.print_r($arrary_result,true).'</pre>';die();
           
           return array('data'=>$arrary_result,'total'=>$result['hits']['total']);
           // return $result->result_array();
        }
        public function sp_id($id)
        {
            $this->db->where(array('idsanpham'=>$id));
            $result= $this->db->get('sanpham');
            if($result->num_rows()==0){
                return false;
            }
            return $result->row_array();
        }
        public function them_sp($data)
        {
            return $this->db->insert('sanpham',$data);
        }
        public function capnhat_sp($data)
        {
            $this->db->where(array('idsanpham'=>$data['idsanpham']));
            return $this->db->update('sanpham',$data);
        }
        public function xoa_sp($id)
        {
            $this->db->where(array('idsanpham'=>$id));
            return $this->db->delete('sanpham');
        }
         
        public function to_Int($str)
        {
        
            return (int)preg_replace("/([^0-9\\.])/i", "", $str);
        }
    }
 ?>