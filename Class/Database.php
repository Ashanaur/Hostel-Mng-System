<?php
    class Database{
        /* 
        this is destruct method for use database disconnect
        */
        public function __destruct(){
            $this->con->close();
        }
    }

?>