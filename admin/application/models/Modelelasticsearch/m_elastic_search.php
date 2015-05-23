<?php
    require APPPATH.'/libraries/elasticsearch.php';
    class  M_elastic_search extends CI_Model
    {
        private $elasticsearch;
        public function __construct()
        {
            parent::__construct();
             $this->elasticsearch  = new ElasticSearch();
        }
        public function createDataIndex($type,$id,$params)
        {           
            return $this->elasticsearch->add($type,$id,$params);
          
        }
        
        public function deleteDataIndex($type,$id)
        {
             return $this->elasticsearch->delete($type,$id);
        }
        
        public function query($type,$query)
        {
             return $this->elasticsearch->query($type,$query);
        }
        
        public function advancedquery($type, $query)
        {
             return $this->elasticsearch->advancedquery($type,$query);
        }
   
    } 
?>