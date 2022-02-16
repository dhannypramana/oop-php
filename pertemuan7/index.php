<?php
    // Pertemuan 7 : Visibility (Access Modifier)
    // Public    : dapat digunakan di mana saja, bahkan di luar kelas
    // Protected : hanya dapat digunakan di dalam sebuah kelas beserta turunannya
    // Private   : hanya dapat diigunakan di dalam sebuah kelas tertentu saja

    class Produk
    {
        private $title,
                $studio,
                $genre,
                $price;
                
        protected $discount = 0;

        public function __construct($title = "title", $studio = "studio", $genre = "genre", $price = 0)
        {
            $this->title = $title;
            $this->studio = $studio;
            $this->genre = $genre;
            $this->price = $price;
        }

        private function getLabel()
        {
            return "$this->studio, $this->genre";
        }

        protected function getInfoProduk()
        {
            $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            return $str;
        }

        public function getPrice()
        {
            return $this->price - ($this->price * $this->discount / 100);
        }
    }

    class Anime extends Produk
    {
        private $totalEpisode;

        public function __construct($title = "title", $studio = "studio",$genre = "genre", $price = 0, $totalEpisode = 0) {
            parent::__construct($title, $studio ,$genre, $price);
            $this->totalEpisode = $totalEpisode;
        }

        public function getInfoProduk()
        {
            $str = "Anime : " . parent::getInfoProduk() . "- {$this->totalEpisode} Episode";
            return $str;
        }
    }

    class Game extends Produk
    {
        private $totalPlayTime;

        public function __construct($title = "title", $studio = "studio",$genre = "genre", $price = 0, $totalPlayTime = 0) {
            parent::__construct($title, $studio, $genre, $price);
            $this->totalPlayTime = $totalPlayTime;
        }
        
        public function getInfoProduk()
        {
            $str = "Game : ". parent::getInfoProduk() ." ~ {$this->totalPlayTime} Jam";
            return $str;
        }

        public function setDiscount($discount)
        {
            $this->discount=$discount;
        }
    }
    
    
    // Driver
    $produk1 = new Anime("Attack On Titan", "MAPPA", "Action", 30000, 80);
    $produk2 = new Game("Grand Theft Auto", "Rockstar Studio", "Gangster Life", 50000, 50);

    echo $produk1->getInfoProduk()."<br>";
    echo $produk2->getInfoProduk()."<br>";

    echo $produk1->getPrice()."<br>";
    $produk2->setDiscount(50);
    echo $produk2->getPrice()."<br>";

    $produk1->setDiscount(90); //error
    $produk1->discount = 90; //error
    $produk1->getPrice();