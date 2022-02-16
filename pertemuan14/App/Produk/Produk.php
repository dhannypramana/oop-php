<?php
    abstract class Produk
    {
        protected $title,
                $studio,
                $genre,
                $price,
                $discount = 0;

        protected function __construct($title = "title", $studio = "studio", $genre = "genre", $price = 0)
        {
            $this->title = $title;
            $this->studio = $studio;
            $this->genre = $genre;
            $this->price = $price;
        }

        protected function getLabel()
        {
            return "$this->studio, $this->genre";
        }

        abstract protected function getInfo();

        // Setter Method
        protected function setTitle($title)
        {
            if (!is_string($title)) 
            {
                throw new Exception("Title must be a String", 1);
            }

            $this->title = $title;
        }

        protected function setStudio($studio)
        {
            $this->studio = $studio;
        }

        protected function setGenre($genre)
        {
            $this->genre = $genre;
        }

        protected function setPrice($price)
        {
            $this->price = $price;
        }

        protected function setDiscount($discount)
        {
            $this->discount=$discount;
        }

        // Getter Method
        protected function getTitle()
        {
            return $this->title;
        }

        protected function getStudio()
        {
            return $this->studio;
        }

        protected function getGenre()
        {
            return $this->genre;
        }

        protected function getPrice()
        {
            return $this->price - ($this->price * $this->discount / 100);
        }
        
        protected function getDiscount()
        {
            return $this->discount;
        }
    }