<?php
    // Pertemuan 5 : Inheritance

    class Produk
    {
        public  $title,
                $studio,
                $genre,
                $price,
                $totalEpisode,
                $totalPlayTime;

        public function __construct($title = "title", $studio = "studio", 
                                    $genre = "genre", $price = 0, $totalEpisode = 0, $totalPlayTime = 0)
        {
            $this->title = $title;
            $this->studio = $studio;
            $this->genre = $genre;
            $this->price = $price;
            $this->totalEpisode = $totalEpisode;
            $this->totalPlayTime = $totalPlayTime;
        }

        public function getLabel()
        {
            return "$this->studio, $this->genre";
        }

        public function getInfoProduk()
        {
            $str = "{$this->title} | {$this->getLabel()} (Rp.{$this->price})";
            return $str;
        }
    }

    class Anime extends Produk
    {
        public function getInfoProduk()
        {
            $str = "Anime : {$this->title} | {$this->getLabel()} (Rp.{$this->price}) - {$this->totalEpisode} Episode";
            return $str;
        }
    }

    class Game extends Produk
    {
        public function getInfoProduk()
        {
            $str = "Game : {$this->title} | {$this->getLabel()} (Rp.{$this->price}) ~ {$this->totalPlayTime} Jam";
            return $str;
        }
    }
    
    
    // Driver
    $produk1 = new Anime("Attack On Titan", "MAPPA", "Action", 30000, 80, 0);
    $produk2 = new Game("Grand Theft Auto", "Rockstar Studio", "Gangster Life", 50000, 0, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();