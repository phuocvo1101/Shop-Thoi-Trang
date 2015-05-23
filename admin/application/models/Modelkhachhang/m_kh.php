<?php
class M_kh extends CI_Model
{
    private $idkhachhang,$tenkhachhang,$phai, $diachikhachhang,
            $diachigiaohang, $email, $dienthoai;
    public function setKhachHang($data)
    {
        $data= array(
            $this->idkhachhang=isset($data['idkhachhang'])? $data['idkhachhang']:0,
            $this->tenkhachhang=isset($data['tenkhachhang'])? $data['tenkhachhang']:'',
            $this->phai=isset($data['phai']) && $data['phai']=='on' ?1:0,
            $this->diachikhachhang=isset($data['diachikhachhang'])? $data['diachikhachhang']:'',
            $this->diachigiaohang=isset($data['diachigiaohang'])? $data['diachigiaohang']:'',
            $this->email=isset($data['email'])? $data['email']:'',
            $this->dienthoai=isset($data['dienthoai'])? $data['dienthoai']:'',
           
        );
    }
    public function getKhachHang()
    {
        $data = array(
            'idkhachhang'=>$this->idkhachhang,
            'tenkhachhang'=>$this->tenkhachhang,
            'phai'=>$this->phai,
            'diachikhachhang'=>$this->diachikhachhang,
            'diachigiaohang'=>$this->diachigiaohang,
            'email'=>$this->email,
            'dienthoai'=>$this->dienthoai,
            
        );
        return $data;
    }
}
?>
