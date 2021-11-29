<?php
    class Food
    {
        public $name;
    
        public function __construct($id, $name) {
            $this->id = $id;
            $this->name = $name; 
        }
        
        public function getId(): int {
            return $this->id;
        }
        
        public function getName(): string {
            return $this->name;
        }
        
        public function setId(int $new_id) {
            $this->id = $new_id;
        }
        
        public function setName(string $new_name) {
            $this->name = $new_name;
        }
    }
?>