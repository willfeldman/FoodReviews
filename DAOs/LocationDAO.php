<?php
    include __DIR__ . '/../Config.php';
    include __DIR__ . '/../Model/Location.php';
    
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
        
        public function findAllLocations() {
            $list_of_locations = array();
            $sql = "SELECT * FROM `food_reviews`.`locations`";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // create location for each result and add to list of locations
                while($row = mysqli_fetch_assoc($result)) {
                    $list_of_locations[] = new Location($row["id"], $row["name"], $row["address"]);
                }
            }
            return $list_of_locations;
        }
        
        public function findLocationById($id) {
            $location;
            $sql = "SELECT * FROM `food_reviews`.`locations` WHERE `id` = " . $id;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // find location with the given id
                while($row = mysqli_fetch_assoc($result)) {
                    $location = new Location($row["id"], $row["name"], $row["address"]);
                }
            }
            return $location;
        }
        
        public function updateLocation($id, Location $location) {
            $sql = "UPDATE `food_reviews`.`locations` SET `name` = '" . $location->getName() . "', `address` = '" . $location->getAddress() . "' WHERE (`id` = '" . $id . "')";
            
            if (mysqli_query($this->conn, $sql)) {
                // Updated the location successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        
        public function deleteLocation($id) {
            $sql = "DELETE FROM `food_reviews`.`locations` WHERE (`id` = '" . $id . "');";
            
            if (mysqli_query($this->conn, $sql)) {
                // Deleted the location successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
    }
?>