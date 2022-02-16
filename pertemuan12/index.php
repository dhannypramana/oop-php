<?php
    // Pertemuan 12 : Interface

    abstract class Produk
    {
        private $title,
                $studio,
                $genre,
                $price,
                $discount = 0;

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

        abstract public function getInfoProduk();

        public function getInfo()
        {
            $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            return $str;
        }

        // Setter Method
        public function setTitle($title)
        {
            if (!is_string($title)) 
            {
                throw new Exception("Title must be a String", 1);
            }

            $this->title = $title;
        }

        public function setStudio($studio)
        {
            $this->studio = $studio;
        }

        public function setGenre($genre)
        {
            $this->genre = $genre;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function setDiscount($discount)
        {
            $this->discount=$discount;
        }

        // Getter Method
        public function getTitle()
        {
            return $this->title;
        }

        public function getStudio()
        {
            return $this->studio;
        }

        public function getGenre()
        {
            return $this->genre;
        }

        public function getPrice()
        {
            return $this->price - ($this->price * $this->discount / 100);
        }
        
        public function getDiscount()
        {
            return $this->discount;
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
            $str = "Anime : " . $this->getInfo() . " - {$this->totalEpisode} Episode";
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
            $str = "Game : ". $this->getInfo() ." ~ {$this->totalPlayTime} Jam";
            return $str;
        }
    }

    class CetakInfoProduk
    {
        public $daftarProduk = [];

        public function addProduk(Produk $produk)
        {
            $this->daftarProduk[] = $produk;
        }

        public function cetak()
        {
            $str = "DAFTAR PRODUK : <br>";
            
            foreach ($this->daftarProduk as $dp) {
                $str .= " - {$dp->getInfoProduk()}<br>";
            }

            return $str;
        }
    }
    
    
    
    // Driver
    $produk1 = new Anime("Attack On Titan", "MAPPA", "Action", 30000, 80);
    $produk2 = new Game("Grand Theft Auto", "Rockstar Studio", "Gangster Life", 50000, 50);
    
    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->addProduk($produk1);
    $cetakProduk->addProduk($produk2);
    echo $cetakProduk->cetak();