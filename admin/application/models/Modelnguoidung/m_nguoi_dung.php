<?php
    class M_nguoi_dung extends CI_Model
    {
        
        public function __construct()
        {
            parent::__construct();
        }
        public function nguoi_dung_dang_nhap($tendn,$matkhau)
        {
            
            $this->db->where(array('tendn'=>$tendn,'matkhau'=>$matkhau));
            $result=$this->db->get('nguoidung');
            if($result->num_rows()==0){
                return false;
            }
            return $result->row_array();
        }
        public function tongsonguoidung()
        {
           return $this->db->count_all('nguoidung');
        }
        public function danhsachnguoidung($limit,$start,$filter="")
        {
            $elasticsearch= new M_elastic_search();
            $data=array('from'=>$start,'size'=>$limit);
            if(!empty($filter)){
                $data['query']=array(
                    'multi_match'=>array(
                     "query" => $filter,
                     "fields" => ["tendn", "ten_nguoi_dung", "email"]
                    )
                );
            }
            $result=$elasticsearch->advancedquery('nguoidung',json_encode($data));
           //echo '<pre>'.print_r($result,true).'</pre>';die();
           // $result=$this->db->get('nguoidung',$limit,$start);
           // if($result->num_rows()==0){
             //   return false;
           // }
           if($result['hits']['total']==0){
            return false;
           }
           $result_array= array();
           foreach($result['hits']['hits'] as $item){
            $result_array[]= $item['_source'];
           }
           /*$result_array= array_map(function($e){
            return $e['_source'];
           },$result['hits']['hits']);*/
          // echo '<pre>'.print_r($result_array,true).'</pre>';die();
           return array('data'=>$result_array,'total'=>$result['hits']['total']);
            //return $result->result_array();
        }
        public function nguoi_dung_id($id)
        {
            $this->db->where(array('ma_nguoi_dung'=>$id));
            $result=$this->db->get('nguoidung');
             if($result->num_rows()==0){
                return false;
            }
            return $result->row_array();
        }
        public function them_nd($data)
        {
            return $this->db->insert('nguoidung',$data);
        }
        public function capnhat_nd($data)
        {
            $this->db->where(array('ma_nguoi_dung'=>$data['ma_nguoi_dung']));
            return $this->db->update('nguoidung',$data);
        }
        public function xoa_nd($id)
        {
            $this->db->where(array('ma_nguoi_dung'=>$id));
            return $this->db->delete('nguoidung');
        }
        public function loai_nguoi_dung()
        {
            $result=$this->db->get('loainguoidung');
            if($result->num_rows()==0){
                return false;
            }
            return $result->result_array();
        }
    }
 ?>