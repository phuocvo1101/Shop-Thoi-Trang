<?php
class M_nd extends CI_Model
{
    private $ma_nguoi_dung,$tendn, $mat_khau,$ten_nguoi_dung,
            $ngay_sinh,$gioi_tinh, $dia_chi, $email,
             $phone, $ma_loai_nguoi_dung,$quyen;
    public function setNguoiDung($data)
    {
        $data= array(
            $this->ma_nguoi_dung=isset($data['ma_nguoi_dung'])? $data['ma_nguoi_dung']:0,
            $this->tendn=isset($data['tendn'])? $data['tendn']:'',
            $this->mat_khau=isset($data['mat_khau'])? $data['mat_khau']:'',
            $this->ten_nguoi_dung=isset($data['ten_nguoi_dung'])? $data['ten_nguoi_dung']:'',
            $this->ngay_sinh=isset($data['ngay_sinh'])? $data['ngay_sinh']:'',
            $this->gioi_tinh=isset($data['gioi_tinh']) && $data['gioi_tinh']=='on' ?1:0,
            $this->dia_chi=isset($data['dia_chi'])? $data['dia_chi']:'',
            $this->email=isset($data['email'])? $data['email']:'',
            $this->phone=isset($data['phone'])? $data['phone']:'',
            $this->ma_loai_nguoi_dung=isset($data['ma_loai_nguoi_dung'])? $data['ma_loai_nguoi_dung']:1,
            $this->quyen=isset($data['quyen'])?$data['quyen']:''
        );
    }
    public function getNguoiDung()
    {
        $data = array(
            'ma_nguoi_dung'=>$this->ma_nguoi_dung,
            'tendn'=>$this->tendn,
            'matkhau'=>$this->mat_khau,
            'ten_nguoi_dung'=>$this->ten_nguoi_dung,
            'ngay_sinh'=>$this->ngay_sinh,
            'gioi_tinh'=>$this->gioi_tinh,
            'dia_chi'=>$this->dia_chi,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'ma_loai_nguoi_dung'=>$this->ma_loai_nguoi_dung,
            'quyen'=>$this->quyen
            
        );
        return $data;
    }
}
?>
