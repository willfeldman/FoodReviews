<?php
    include __DIR__ . '/../Config.php';
    include __DIR__ . '/../Model/User.php';
    
    class UserDAO
    {
        public $config;
        public $conn;
        
        public function __construct() {
            $this->config = new Config();
            $this->conn = $this->config->getConnection();
        }
        
        public function createUser(User $user) {
            $sql = "INSERT INTO `food_reviews`.`users` (`first_name`, `last_name`, `username`, `password`, `email`, `date_of_birth`) VALUES ('" . $user->getFirstName() . "', '" . $user->getLastName() . "', '" . $user->getUsername() . "', '" . $user->getPassword() . "', '" . $user->getEmail() . "', '" . $user->getDOB() . "')";
            
            if (mysqli_query($this->conn, $sql)) {
                // Created a user successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        
        public function findAllUsers() {
            $list_of_users = array();
            $sql = "SELECT * FROM `food_reviews`.`users`";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // create user for each result and add to list of users
                while($row = mysqli_fetch_assoc($result)) {
                    $list_of_users[] = new User($row["id"], $row["first_name"], $row["last_name"], $row["username"], $row["password"], $row["email"], $row["date_of_birth"]);
                }
            }
            return $list_of_users;
        }
        
        public function findUserById($id) {
            $user;
            $sql = "SELECT * FROM `food_reviews`.`users` WHERE `id` = " . $id;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // find user with the given id
                while($row = mysqli_fetch_assoc($result)) {
                    $user = new User($row["id"], $row["first_name"], $row["last_name"], $row["username"], $row["password"], $row["email"], $row["date_of_birth"]);
                }
            }
            return $user;
        }
        
        public function updateUser($id, User $user) {
            $sql = "UPDATE `food_reviews`.`users` SET `first_name` = '" . $user->getFirstName() . "', `last_name` = '" . $user->getLastName() . "', `username` = '" . $user->getUsername() . "', `password` = '" . $user->getPassword() . "', `email` = '" . $user->getEmail() . "', `date_of_birth` = '" . $user->getDOB() . "' WHERE (`id` = '" . $id . "')";
            
            if (mysqli_query($this->conn, $sql)) {
                // Updated the user successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        
        public function deleteUser($id) {
            $sql = "DELETE FROM `food_reviews`.`users` WHERE (`id` = '" . $id . "');";
            
            if (mysqli_query($this->conn, $sql)) {
                // Deleted the user successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
    }
?>