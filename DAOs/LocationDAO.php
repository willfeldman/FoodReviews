<?php
    include 'Config.php';
    include 'Location.php';
    
    class LocationDAO
    {
        public $config;
        public $conn;
        
        public function __construct() {
            $this->config = new Config();
            $this->conn = $this->config->getConnection();
        }
        
        public function createLocation(Location $location) {
            $sql = "INSERT INTO `food_reviews`.`locations` (`name`, `address`) VALUES ('" . $location->getName() . "', '" . $location->getAddress() . "')";
            
            if (mysqli_query($this->conn, $sql)) {
                // Created a location successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
    }
?>