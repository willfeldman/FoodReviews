<?php
    class User
    {
        public $id;
        public $first_name;
        public $last_name;
        public $username;
        public $password;
        public $email;
        public $date_of_birth;
    
        public function __construct($id, $first_name, $last_name, $username, $password, $email, $date_of_birth) {
            $this->id = $id; 
            $this->first_name = $first_name; 
            $this->last_name = $last_name; 
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;
            $this->date_of_birth = $date_of_birth;
        }
        
        public function getId(): int {
            return $this->id;
        }
        
        public function getFirstName(): string {
            return $this->first_name;
        }
        
        public function getLastName(): string {
            return $this->last_name;
        }
        
        public function getUsername(): string {
            return $this->username;
        }
        
        public function getPassword(): string {
            return $this->password;
        }
        
        public function getEmail(): string {
            return $this->email;
        }
        
        public function getDOB(): string {
            return $this->date_of_birth;
        }
        
        public function setId(int $new_id) {
            $this->id = $new_id;
        }
        
        public function setFirstName(string $new_first_name) {
            $this->first_name = $new_first_name;
        }
        
        public function setLastName(string $new_last_name) {
            $this->last_name = $new_last_name;
        }
        
        public function setUsername(string $new_username) {
            $this->username = $new_username;
        }
        
        public function setPassword(string $new_password) {
            $this->password = $new_password;
        }
        
        public function setEmail(string $new_email) {
            $this->email = $new_email;
        }
        
        public function setDOB($new_DOB) {
            $this->date_of_birth = $new_DOB;
        }
    }
?>