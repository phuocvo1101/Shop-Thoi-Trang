<?php
class M_loai_sp extends CI_Model
{
    // Tao menu doc
    public function ds_loai_cha(&$arrDM=array())
    {
        $ds_loaicha= $this->db->get_where('loaisanpham',array('maloaicha'=>0));
        $mang= array();
        if($ds_loaicha->num_rows()>0){
            foreach($ds_loaicha->result_array() as $lc){
                $child =  $this->ds_loai_con($lc['idloaisanpham'],$arrDM);
                $result = array('id'=>$lc['idloaisanpham'],'tenloaisp'=>$lc['tenloaisp'],'tenloaiurl'=>$lc['tenloaiurl'],'name'=>$lc['tenloaisp'],'child'=>$child);
                if(count($child) == 0) {
                    $arrDM[] = $result;
                }
                $mang[]= $result;
            }
        }
       
        return $mang;
    }
    public function ds_loai_con($maloaicha,&$arrDM)
    {
        $ds_loaicon = $this->db->get_where('loaisanpham',array('maloaicha'=>$maloaicha));
        $arrResult = array();
        foreach($ds_loaicon->result_array() as $item) {
            $child =   $this->ds_loai_con($item['idloaisanpham'],$arrDM);
            $result = array('id'=>$item['idloaisanpham'],'tenloaisp'=>$item['tenloaisp'],'tenloaiurl'=>$item['tenloaiurl'],'name'=>$item['tenloaisp'],'child'=>$child);
            if(count($child) == 0) {
                $arrDM[] = $result;
            }
            $arrResult[]=$result;
          
        }
        return $arrResult;
    }
    
    public function get_dm_sp()
    {
       $arrDM = array();
       $this->ds_loai_cha($arrDM);
       //echo '<pre>'.print_r($arrDM,true).'</pre>';die();
       return $arrDM;
        
    }
    //end Tao menu doc
}
?>
