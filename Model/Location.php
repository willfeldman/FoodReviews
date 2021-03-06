<?php
    class Location
    {
        public $name;
        public $address;
    
        public function __construct($id, $name, $address) {
            $this->id = $id;
            $this->name = $name; 
            $this->address = $address; 
        }
        
        public function getId(): int {
            return $this->id;
        }
        
        public function getName(): string {
            return $this->name;
        }
        
        public function getAddress(): string {
            return $this->address;
        }
        
        public function setId(int $new_id) {
            $this->id = $new_id;
        }
        
        public function setName(string $new_name) {
            $this->name = $new_name;
        }
        
        public function setAddress(string $new_address) {
            $this->address = $new_address;
        }
    }
?>