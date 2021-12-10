<?php
    include __DIR__ . '/../Config.php';
    include __DIR__ . '/../Model/Review.php';
    
    class ReviewDAO
    {
        public $config;
        public $conn;
        
        public function __construct() {
            $this->config = new Config();
            $this->conn = $this->config->getConnection();
        }
        
        public function createReview(Review $review) {
            $sql = "INSERT INTO `food_reviews`.`reviews` (`content`, `rating`, `date_of_review`, `user_id`, `location_id`, `food_id`) VALUES ('" . $review->getContent() . "', '" . $review->getRating() . "', '" . $review->getDOR() . "', '" . $review->getUserId() . "', '" . $review->getLocationId() . "', '" . $review->getFoodId() . "')";
            
            if (mysqli_query($this->conn, $sql)) {
                // Created a review successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        
        public function findAllReviews() {
            $list_of_reviews = array();
            $sql = "SELECT * FROM `food_reviews`.`reviews`";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // create review for each result and add to list of reviews
                while($row = mysqli_fetch_assoc($result)) {
                    $list_of_reviews[] = new Review($row["id"], $row["content"], $row["rating"], $row["date_of_review"], $row["user_id"], $row["location_id"], $row["food_id"]);
                }
            }
            return $list_of_reviews;
        }
        
        public function findReviewById($id) {
            $review;
            $sql = "SELECT * FROM `food_reviews`.`reviews` WHERE `id` = " . $id;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // find review with the given id
                while($row = mysqli_fetch_assoc($result)) {
                    $review = new Review($row["id"], $row["content"], $row["rating"], $row["date_of_review"], $row["user_id"], $row["location_id"], $row["food_id"]);
                }
            }
            return $review;
        }
        
        public function updateReview($id, Review $review) {
            $sql = "UPDATE `food_reviews`.`reviews` SET `content` = '" . $review->getContent() . "', `rating` = '" . $review->getRating() . "', `date_of_review` = '" . $review->getDOR() . "', `user_id` = '" . $review->getUserId() . "', `location_id` = '" . $review->getLocationId() . "', `food_id` = '" . $review->getFoodId() . "' WHERE (`id` = '" . $id . "')";
            
            if (mysqli_query($this->conn, $sql)) {
                // Updated the review successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        
        public function deleteReview($id) {
            $sql = "DELETE FROM `food_reviews`.`reviews` WHERE (`id` = '" . $id . "');";
            
            if (mysqli_query($this->conn, $sql)) {
                // Deleted the review successfully
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
        
        public function findAllReviewByUserId($id) {
            if (empty($id)) {
                $id = "*";
            }
            $list_of_reviews = array();
            $sql = "SELECT * FROM `food_reviews`.`reviews` WHERE (`user_id` = '" . $id . "')";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // create review for each result and add to list of reviews
                while($row = mysqli_fetch_assoc($result)) {
                    $list_of_reviews[] = new Review($row["id"], $row["content"], $row["rating"], $row["date_of_review"], $row["user_id"], $row["location_id"], $row["food_id"]);
                }
            }
            return $list_of_reviews;
        }
        
        public function findAllReviewByFoodId($id) {
            if (empty($id)) {
                $id = "*";
            }
            $list_of_reviews = array();
            $sql = "SELECT * FROM `food_reviews`.`reviews` WHERE (`food_id` = '" . $id . "')";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // create review for each result and add to list of reviews
                while($row = mysqli_fetch_assoc($result)) {
                    $list_of_reviews[] = new Review($row["id"], $row["content"], $row["rating"], $row["date_of_review"], $row["user_id"], $row["location_id"], $row["food_id"]);
                }
            }
            return $list_of_reviews;
        }
        
        public function findAllReviewByLocationId($id) {
            if (empty($id)) {
                $id = "*";
            }
            $list_of_reviews = array();
            $sql = "SELECT * FROM `food_reviews`.`reviews` WHERE (`location_id` = '" . $id . "')";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // create review for each result and add to list of reviews
                while($row = mysqli_fetch_assoc($result)) {
                    $list_of_reviews[] = new Review($row["id"], $row["content"], $row["rating"], $row["date_of_review"], $row["user_id"], $row["location_id"], $row["food_id"]);
                }
            }
            return $list_of_reviews;
        }
        
        public function findReviewerName($id) {
            $user;
            $sql = "SELECT * FROM `food_reviews`.`users` WHERE `id` = " . $id;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // find user with the given id
                while($row = mysqli_fetch_assoc($result)) {
                    $user = $row["first_name"] . " " . $row["last_name"];
                }
            }
            return $user;
        }
        
        
        public function findReviewFood($id) {
            $food;
            $sql = "SELECT * FROM `food_reviews`.`foods` WHERE `id` = " . $id;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // find food with the given id
                while($row = mysqli_fetch_assoc($result)) {
                    $food = $row["name"];
                }
            }
            return $food;
        }
        
        public function findReviewLocation($id) {
            $location;
            $sql = "SELECT * FROM `food_reviews`.`locations` WHERE `id` = " . $id;
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                // find location with the given id
                while($row = mysqli_fetch_assoc($result)) {
                    $location = $row["name"];
                }
            }
            return $location;
        }
    }
?>