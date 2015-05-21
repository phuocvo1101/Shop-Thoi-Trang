<?php
    class M_sp extends CI_Model
    {
        private $idsanpham, $tensanpham, $tensanphamurl, $chitietsp, $dongia,
                $hinh, $ngaycapnhat, $idloaisanpham, $sanphammoi;
        
        public function setData($data)
        {
            $this->idsanpham = isset($data['idsanpham'])?$data['idsanpham']:0;
            $this->tensanpham = isset($data['tensanpham'])?$data['tensanpham']:'';
            $this->tensanphamurl = isset($data['tensanphamurl'])?$data['tensanphamurl']:'';
            $this->chitietsp = isset($data['chitietsp'])?$data['chitietsp']:'';
            $this->dongia = isset($data['dongia'])?$data['dongia']:0;
            $this->hinh = isset($data['hinh'])?$data['hinh']:'';
            $this->ngaycapnhat = isset($data['ngaycapnhat'])?$data['ngaycapnhat']:date('Y-m-d');
            $this->idloaisanpham = isset($data['idloaisanpham'])?$data['idloaisanpham']:0;
            $this->sanphammoi = isset($data['sanphammoi']) && $data['sanphammoi']=='on' ?1:0;
        }
        
        public function getData()
        {
            $data = array(
                'idsanpham' => $this->idsanpham,
                'tensanpham' => $this->tensanpham,
                'tensanphamurl' => $this->tensanphamurl,
                'chitietsp' => $this->chitietsp,
                'dongia' => $this->dongia,
                'hinh' => $this->hinh,
                'ngaycapnhat' => $this->ngaycapnhat,
                'idloaisanpham' => $this->idloaisanpham,
                'sanphammoi' => $this->sanphammoi
            );
            return $data;
           
        }
    }
 ?> 
 <!--masanpham`, `tensanpham`, `tensanphamurl`, `diengiai`, `dongia`,
  `hinh`, `ngaycapnhat`, `maloai`, `sanphammoi -->