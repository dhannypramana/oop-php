<?php
    class Game extends Produk implements InfoProduk
    {
        private $totalPlayTime;

        public function __construct($title = "title", $studio = "studio",$genre = "genre", $price = 0, $totalPlayTime = 0) {
            parent::__construct($title, $studio, $genre, $price);
            $this->totalPlayTime = $totalPlayTime;
        }

        public function getInfo()
        {
            $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            return $str;
        }
        
        public function getInfoProduk()
        {
            $str = "Game : ". $this->getInfo() ." ~ {$this->totalPlayTime} Jam";
            return $str;
        }
    }