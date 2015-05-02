<?php
    class Home_model extends CI_Model 
    {
       public function __construct()
       {
            parent::__construct();
       }
       
       public function getHome($id)
       {
        
            $this->db->where(array('id'=>$id));
            $query = $this->db->get('home');
            
            if($query->num_rows()>0){
                return $query->row_array();
            }
            return false;
       
       }
    }
?>