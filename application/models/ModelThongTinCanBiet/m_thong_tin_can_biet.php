<?php
    class M_thong_tin_can_biet extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function ds_loai_cha($maloaicha=0)
        {
            $this->db->where(array('maloaicha'=>$maloaicha));
            $ds_loai_cha=$this->db->get('thongtincanbiet');
            if($ds_loai_cha->num_rows()==0){
                return false;
            }
            $arrResult= array();
            foreach($ds_loai_cha->result_array() as $lc){
                $child =  $this->ds_loai_cha($lc['id']);
                $arrResult[]=array('id'=>$lc['id'],'ten'=>$lc['ten'],'chitiet'=>$lc['chitiet'],'child'=>$child);
            }
            return $arrResult;
        }
        
    }
?>