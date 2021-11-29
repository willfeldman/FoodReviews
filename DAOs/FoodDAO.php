<?php
    include __DIR__ . '/../Config.php';
    include __DIR__ . '/../Model/Food.php';
    
    class FoodDAO
    {
        public $config;
        public $conn;
        
        public function __construct() {
            $this->config = new Config();
            $this->conn = $this->config->getConnection();
        }
        
        public function createFood(Food $food) {
            $sql = "INSERT INTO `food_reviews`.`foods` (`name`) VALUES ('" . $food->getName() . "')";
            
            if (mysqli_query($this->conn, $sql)) {
                // Created a food successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        
        public function findAllFoods() {
            $list_of_foods = array();
            $sql = "SELECT * FROM `food_reviews`.`foods`";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // create food for each result and add to list of foods
                while($row = mysqli_fetch_assoc($result)) {
                    $list_of_foods[] = new Food($row["id"], $row["name"]);
                }
            }
            return $list_of_foods;
        }
        
        public function findFoodById($id) {
            $food;
            $sql = "SELECT * FROM `food_reviews`.`foods` WHERE `id` = " . $id;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // find food with the given id
                while($row = mysqli_fetch_assoc($result)) {
                    $food = new Food($row["id"], $row["name"]);
                }
            }
            return $food;
        }
        
        public function updateFood($id, Food $food) {
            $sql = "UPDATE `food_reviews`.`foods` SET `name` = '" . $food->getName() . "' WHERE (`id` = '" . $id . "')";
            
            if (mysqli_query($this->conn, $sql)) {
                // Updated the food successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        
        public function deleteFood($id) {
            $sql = "DELETE FROM `food_reviews`.`foods` WHERE (`id` = '" . $id . "');";
            
            if (mysqli_query($this->conn, $sql)) {
                // Deleted the food successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
    }
?>