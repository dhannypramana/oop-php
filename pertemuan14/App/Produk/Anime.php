<?php
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