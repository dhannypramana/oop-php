<?php
    // Pertemuan 4 : Object Type
    // Membuat Class menjadi tipe data sendiri

    class Produk
    {
        public  $title,
                $studio,
                $genre,
                $price;

        public function __construct($title = "title", $studio = "studio", $genre = "genre", $price = 0)
        {
            $this->title = $title;
            $this->studio = $studio;
            $this->genre = $genre;
            $this->price = $price;
        }

        public function getLabel()
        {
            return "$this->studio, $this->genre";
        }
    }

    class CetakInfoProduk
    {
        // Object Type
        // Membuat Class menjadi tipe data sendiri
        public function cetak(Produk $produk)
        {
            $str = "{$produk->title} | {$produk->getLabel()} (Rp.{$produk->price})";
            return $str;
        }        
    }

    $produk1 = new Produk("Attack On Titan", "MAPPA", "Action", 30000);
    $produk2 = new Produk("Grand Theft Auto", "Rockstar Studio", "Gangster Life", 50000);

    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);

    echo "<br>";

    $infoProduk2 = new CetakInfoProduk();
    echo $infoProduk2->cetak($produk2);
?>