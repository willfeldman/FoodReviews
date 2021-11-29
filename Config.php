<?php
    class Config 
    {
        public $conn_servername = "localhost";
        public $conn_username = "root"; 
        public $conn_password = "P@ssw0rd";
        
        public function getConnection() {
            // Create connection
            $conn = new mysqli($this->conn_servername, $this->conn_username, $this->conn_password);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            return $conn;
        }
    }
?>