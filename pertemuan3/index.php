<?php
    // Pertemuan 3 : Constructor Method

    class Produk
    {
        // Property
        public  $title,
                $studio,
                $price;

        // Constructor Method
        public function __construct($title = "title", $studio = "studio", $price = 0)
        {
            $this->title = $title;
            $this->studio = $studio;
            $this->price = $price;
        }

        // Method
        public function getLabel()
        {
            return "$this->title: $this->studio.";
        }
    }

    $produk1 = new Produk("Naruto", "Studio Pierrot", 30000);
    $produk2 = new Produk("Grand Theft Auto", "Rockstar Studio", 50000);
    $produk3 = new Produk("Dragon Ball");

    echo "Anime\t: " . $produk1->getLabel();
    echo "<br>";
    echo "Game\t: " . $produk2->getLabel();
    echo "<br>";
?>