<?php
class Shop extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->cart->product_name_rules =  "\.\:\-_ a-z0-9\pL"; 
        $this->load->model('ModelSanPham/m_san_pham','msp');
    }
    public function index()
    {
        $this->data['path']=array('ViewShop/index');
        $this->load->view('layout',$this->data);
    }
    public function insert(){
        if($this->input->post('submitmua')){
            
            $data = array(
            array(
                'id' => $this->input->post('masanpham'),
                'name' => $this->input->post('tensanpham'),
                'price' =>$this->msp->toInt($this->input->post('gia')) ,
                'qty'   => $this->input->post('soluong'),
                'options' => array('size' =>  $this->input->post('size')) 
            
            ),
            );
        }
       
        // Them san pham vao gio hang
        if($this->cart->insert($data)){
             $mss= "Them san pham thanh cong";
        }else{
            $mss= "Them san pham that bai";
        }
        $this->data['mss']=$mss;
         $this->data['path']=array('ViewShop/index');
        $this->load->view('layout',$this->data);
        
}
    public function show()
    {
        if($this->input->post('capnhat')){
            $formUpdate  = $this->input->post('soluong');
         
            $data=$this->cart->contents();
            foreach($data as $item){
                
                if(isset($formUpdate[$item['id']])) {
                     $item['qty'] = $formUpdate[$item['id']];
                    $update[] = array("rowid" => $item['rowid'], "qty" => $item['qty']);
                }
                
            }
           // var_dump($update);die();
            if($this->cart->update($update)){
                $mssupdate = "Update san pham thanh cong";
            }else{
                $mssupdate = "Update san pham that bai";
            }
            $this->data['mssupdate'] = $mssupdate;
        }
        //Show thong tin chi tiet gio hang
        $data=$this->cart->contents();
        $tongtien=$this->cart->total();
        $tongsanpham = $this->cart->total_items();
       
        $this->data['tongsp']=$tongsanpham;
        $this->data['giohang']=$data;
        $this->data['tongtien']=$tongtien;
        $this->data['path']=array('ViewShop/giohang');
        $this->load->view('layout',$this->data);
        
    }
    public function update()
    {
        $data=$this->cart->contents();
        foreach($data as $item){
            if($item['id'] == 5){
                $item['qty'] = 2;
                $update = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($update)){
            echo "Update san pham thanh cong";
        }else{
            echo "Update san pham that bai";
        }
    }
    public function deleteOne()
    {
       $data=$this->cart->contents();
        foreach($data as $item){
            if($item['id'] == "1"){
                $item['qty'] = 0;
                $delOne = array("rowid" => $item['rowid'], "qty" => $item['qty']);
            }
        }
        if($this->cart->update($delOne)){
            echo "Xoa san pham thanh cong";
        }else{
            echo "Xoa san pham that bai";
        }
     }
     public function del()
     {
        $this->cart->destroy();
        echo "Done";
    }
    //dem tong so san pham trong gio hang
    public function total()
    {
       echo 'Hien tai co '.$this->cart->total_items().' san pham trong gio hang';
    }
    // dem tong so tien trong gio hang
    public function product(){
        $data=$this->cart->contents();
        foreach($data as $item){
            if($this->cart->has_options($item['rowid'])){
                foreach($this->cart->product_options($item['rowid']) as $option_name => $option_value){
                    echo "<b>$option_name</b>: $option_value</br />";
                }
            }
        }
}
    public function totalmoney()
    {
          echo 'Tong tien '.$this->cart->total().'$ trong gio hang';
    }
    public function dangnhap()
    {
         $this->data['path']=array('ViewShop/dangnhap');
        $this->load->view('layout',$this->data);
    }
}
?>