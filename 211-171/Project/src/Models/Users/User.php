<?php
    namespace src\Models\Users;
    class User{
        private $name;

        public function __construct(string $name){
            $this->name = $name;
        }
        
        public function getName(){
            return $this->name;
        }
     }

