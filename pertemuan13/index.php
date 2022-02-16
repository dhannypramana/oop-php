<?php
    // Pertemuan 13 : Auto Loading
    // Memanggil Class (File) tanpa harus menggunakan require

    interface InfoProduk
    {
        public function getInfoProduk();
    }

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

    class Anime extends Produk implements InfoProduk
    {
        private $totalEpisode;

        public function __construct($title = "title", $studio = "studio",$genre = "genre", $price = 0, $totalEpisode = 0) {
            parent::__construct($title, $studio ,$genre, $price);
            $this->totalEpisode = $totalEpisode;
        }

        public function getInfo()
        {
            $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            return $str;
        }

        public function getInfoProduk()
        {
            $str = "Anime : " . $this->getInfo() . " - {$this->totalEpisode} Episode";
            return $str;
        }
    }

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