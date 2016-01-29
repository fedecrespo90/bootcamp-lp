<?php namespace Models;
    class Book{

        private $id;
        private $title;
        private $price;
        private $descrip;
        private $connec
        public function __construct($id, $title, $price, $descrip)
        {
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
            $this->descrip =$descrip;
        }
        public function getId()
        {
            return $this->id;
        }
        private function setId($id)
        {
            $this->id = $id;
        }
        public function getTitle()
        {
            return $this->title;
        }
        public function setTitle($title)
        {
            $this->title = $title;
        }
        public function getPrice()
        {
            return $this->price;
        }
        public function setPrice($price)
        {
            $this->price = $price;
        }
        public function getDescription()
        {
            return $this->description;
        }
        public function setDescription($description)
        {
            $this->description =$description;
        }
    }
?>
