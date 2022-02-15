<?php
    // Pertemuan 3 : Constructor Method
    
    class Produk
    {
        // Property
        public  $title = 'title',
                $studio = 'studio',
                $price = 'price';

        // Method
        public function getLabel()
        {
            return "$this->title: $this->studio.";
        }
    }
/*
    $produk1 = new Produk();
    $produk1->title = "Naruto";
    var_dump($produk1->title);

    $produk2 = new Produk();
    $produk2->title = "Grand Theft Auto";
    $produk2->tambahProperty = "hahahaha"; //penambahan atribut baru setelah objek di instansiasi
    var_dump($produk2);
*/
    $produk3 = new Produk();
    $produk3->title = "Naruto";
    $produk3->studio = "Studio Pierrot";
    $produk3->price = 30000;

    $produk4 = new Produk();
    $produk4->title = "Grand Theft Auto";
    $produk4->studio = "Rockstar Studio";
    $produk4->price = 50000;

    echo "Anime\t: " . $produk3->getLabel();
    echo "<br>";
    echo "Game\t: " . $produk4->getLabel()
?>