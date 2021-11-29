<?php
    class Review
    {
        public $id;
        public $content;
        public $rating;
        public $date_of_review;
        public $user_id;
        public $location_id;
        public $food_id;
    
        public function __construct($id, $content, $rating, $date_of_review, $user_id, $location_id, $food_id) {
            $this->id = $id; 
            $this->content = $content; 
            $this->rating = $rating; 
            $this->date_of_review = $date_of_review;
            $this->user_id = $user_id;
            $this->location_id = $location_id;
            $this->food_id = $food_id;
        }
        
        public function getId(): int {
            return $this->id;
        }
        
        public function getContent(): string {
            return $this->content;
        }
        
        public function getRating(): string {
            return $this->rating;
        }
        
        public function getDOR(): string {
            return $this->date_of_review;
        }
        
        public function getUserId(): string {
            return $this->user_id;
        }
        
        public function getLocationId(): string {
            return $this->location_id;
        }
        
        public function getFoodId(): string {
            return $this->food_id;
        }
        
        public function setId(int $new_id) {
            $this->id = $new_id;
        }
        
        public function setContent(string $new_content) {
            $this->content = $new_content;
        }
        
        public function setRating(string $new_rating) {
            $this->rating = $new_rating;
        }
        
        public function setDOR($new_DOR) {
            $this->date_of_review = $new_DOR;
        }
        
        public function setUserId(string $new_user_id) {
            $this->user_id = $new_user_id;
        }
        
        public function setLocationId(string $new_location_id) {
            $this->location_id = $new_location_id;
        }
        
        public function setFoodId(string $new_food_id) {
            $this->food_id = $new_food_id;
        }
    }
?>