<?php
    class Database{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'hostel';
        protected $con;
        protected $result;
        protected $sql;
        
        /**
         * This is a construct method use for database connection..
         */
        public function __construct(){
            if(!isset($this->con)){
                $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
                if(!$this->con){
                    echo 'error';
                }
            }
            return $this->con;
        }

        /* 
        this is destruct method for use database disconnect
        */
        public function __destruct(){
            $this->con->close();
    }

?>