<?php
    class Location
    {
        public $name;
        public $address;
    
        public function __construct($name, $address) {
            $this->name = $name; 
            $this->address = $address; 
        }
        
        public function getName(): string {
            return $this->name;
        }
        
        public function getAddress(): string {
            return $this->address;
        }
        
        public function setName(string $new_name) {
            $this->name = $new_name;
        }
        
        public function setAddress(string $new_address) {
            $this->address = $new_address;
        }
    }
?>