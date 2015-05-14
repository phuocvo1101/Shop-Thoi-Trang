<?php
    class M_user extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function create($data)
        {
            $this->db->insert('user',$data);
        }
         public function create_khachhang($data)
        {
            $this->db->insert('khachhang',$data);
        }
         public function create_donhang($data)
        {
            $this->db->insert('donhang',$data);
        }
         public function create_chitietdonhang($data)
        {
            $this->db->insert('chitietdonhang',$data);
        }
        public function check_exists_email($email)
        {
             $this->db->where(array('email'=>$email));
             $result= $this->db->get('user');
             if($result->num_rows()==0){
                return false;               
             }
             return true;
        }
        public function check_exists_username($username)
        {
             $this->db->where(array('username'=>$username));
             $result= $this->db->get('user');
             if($result->num_rows()==0){
                return false;               
             }
             return true;
        }
        
         public function check_login($username_email, $password)
        {
                //them dieu kien kiem tra email va password
                $this->db->where(array('email' => $username_email, 'password' => $password));
                $this->db->or_where(array('username'=>$username_email,'password' => $password ));
                //thuc hien cau truy van
                $query = $this->db->get('user');
                if($query->num_rows()== 0)
                {
                    return false;
                }
                return true;
        }
     
    /*
     * lay thong tin thanh vien
     */
        public function get_user_info($username_email, $password)
        {
            //tao dieu kien cho cau truy van
            //$this->db->where($where);
            //$this->db->query_string()
          //   $this->db->where(array('email' => $username_email, 'password' => $password));
         //    $this->db->or_where(array('username'=>$username_email,'password' => $password ));
         //   $result = $this->db->get('user');
          //  var_dump($result->row_array());die();
         $sql = "SELECT * FROM user WHERE (username=? OR email=?) AND password=?";
            $result = $this->db->query($sql, array($username_email, $username_email, $password));
            
            return $result->row_array();
        }
        public function get_khachhang_last()
        {
            $this->db->select('*')->from('khachhang')->order_by('idkhachhang', 'desc')->limit(1);
            $query= $this->db->get();
            return $query->row_array();
        
        }
        public function get_donhang_last()
        {
            $this->db->select('*')->from('donhang')->order_by('iddonhang', 'desc')->limit(1);
            $query= $this->db->get();
            return $query->row_array();
        
        }
    }
?>