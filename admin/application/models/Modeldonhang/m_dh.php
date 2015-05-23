<?php
class M_dh extends CI_Model
{
    private $iddonhang,$tendonhang,$trigiadonhang;
    public function setDonHang($data)
    {
        $data= array(
            $this->iddonhang=isset($data['iddonhang'])? $data['iddonhang']:0,
            $this->tendonhang=isset($data['tendonhang'])? $data['tendonhang']:'',
            $this->trigiadonhang=isset($data['trigiadonhang'])? $data['trigiadonhang']:0,
        );
    }
    public function getDonHang()
    {
        $data = array(
            'iddonhang'=>$this->iddonhang,
            'tendonhang'=>$this->tendonhang,
            'trigiadonhang'=>$this->trigiadonhang,            
        );
        return $data;
    }
}
?>
