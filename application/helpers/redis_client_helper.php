<?php
    class RedisClient extends Redis
    {
   	   protected static $_default_config = array(
    		'socket_type' => 'tcp',
    		'host' => '127.0.0.1',
    		'password' => NULL,
    		'port' => 6379,
    		'timeout' => 0
    	);
        protected $_redis;
        
        public function setupRedis()
        {
            $config = array();
    		$CI =& get_instance();
    
    		if ($CI->config->load('redis', TRUE, TRUE))
    		{
    			$config += $CI->config->item('redis');
    		}
   
    		$config = array_merge(self::$_default_config, $config);
    
    		$this->_redis = new Redis();
    
    		try
    		{
    			if ($config['socket_type'] === 'unix')
    			{
    				$success = $this->_redis->connect($config['socket']);
    			}
    			else // tcp socket
    			{
    				$success = $this->_redis->connect($config['host'], $config['port'], $config['timeout']);
    			}
    
    			if ( ! $success)
    			{
    				log_message('debug', 'Cache: Redis connection refused. Check the config.');
    				return FALSE;
    			}
    		}
    		catch (RedisException $e)
    		{
    			log_message('debug', 'Cache: Redis connection refused ('.$e->getMessage().')');
    			return FALSE;
    		}
    
    		if (isset($config['password']))
    		{
    			$this->_redis->auth($config['password']);
    		}
    
    
    		return TRUE;
        }
        public function __construct()
        {
            $result = $this->setupRedis();
            if(!$result) {
                die('Can not connect to Redis Server!');
            }
        }
        
        public function set($key, $data)
        {
           
   			$data = array('data'=>$data);
             
            $this->_redis->set($key, json_encode($data));
        }
        
        public function get($key)
        {
            $result = $this->_redis->get($key);
            if(empty($result)) {
                return null;
            }
          
            $data = json_decode($result,true);
            
            return is_object($data) ? $data->data : $data['data'];      
        }
        
        public function del($key)
        {
            return $this->_redis->del($key);
        }
    } 
?>